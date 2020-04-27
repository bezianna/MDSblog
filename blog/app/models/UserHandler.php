<?php

    class UserHandler extends Conn {
        private $userName;
        private $email;
        private $pass;
        private $userType;

        function __construct($userName, $pass, $email = "", $userType = -1) {
            $this->userName = $userName;
            $this->pass = $pass;
            $this->email = $email;
            $this->userType = $userType;
            parent::__construct();  //to inherit (extend) conn
        }

        private function EmailUserNameCheck() {
            $stmt = $this->conn->prepare("SELECT UserID FROM login
            WHERE Email = ?");

            $stmt2 = $this->conn->prepare("SELECT UserID FROM login
            WHERE UserName = ?");

            $stmt->execute([$this->email]);
            $stmt2->execute([$this->userName]);

            return [$stmt->rowCount(), $stmt2->rowCount()];
        }

        public function Registration($passAgain) {
            $stmt = $this->conn->prepare("INSERT INTO login
            (UserName, Email, RegType, Pass)
            VALUES(?,?,?,?)");
            $check = $this->EmailUserNameCheck();

            $errors = "";

            if(mb_strlen($this->userName) < 3) //tells how many caracters the string consists of
                $errors .= "The user name must be at least 3 characters long! |";

            if(mb_strpos($this->email, "@") === false 
            || mb_strpos($this->email, ".") === false)   //tells in what place the character or string is, if it's not in there, it returns a false value
                $errors .= "The email address format is incorrect! |";
        
            if(mb_strlen($this->pass) < 6)
                $errors .= "The password must be at least 6 characters long! |";
        
            if($passAgain != $this->pass)
                $errors .= "The two passwords do not match! |";

            if($check[0] != 0)
                $errors .= "This email address already exists! |";

            if($check[1] != 0)
            $errors .= "This username already exists! |";
            
            
            if(empty($errors)) {
                $this->pass = hash("sha512", $this->pass);

                $stmt->execute([
                    $this->userName, $this->email,
                    $this->userType, $this->pass,
                ]);    
                $baseUrl = Url::GetBaseUrl();
                
                header("location: {$baseUrl}?page=login&successReg=1");

            } else {
                throw new Exception($errors);
            }        
        }     

            public function Login() {
            $stmt = $this->conn->prepare("SELECT * FROM login WHERE 
            (UserName = ? AND Pass = ?) OR (Email = ? AND Pass = ?)");  //?-s are parameters, insted of "..." so user can't write SQL from outside by accessing the code
            $this->pass = hash("sha512", $this->pass);

            $stmt->execute(
                [$this->userName, $this->pass, 
                $this->userName, $this->pass]
            );

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1) {
                setcookie("UserName", $row["UserName"], time()+86400, "/", "", false, true);
                setcookie("UserID", $row["UserID"], time()+86400, "/", "", false, true);
                setcookie("RegType", $row["RegType"], time()+86400, "/", "", false, true);
                $baseUrl = Url::GetBaseUrl();

                header("location:{$baseUrl}?");
            }

            throw new Exception("Invalid username and password!");
        }

        public function ChangePass($newPass, $newPassAgain) {
            $errors = "";
            $newPass = trim($newPass);
            $newPassAgain = trim($newPassAgain);
            $stmt = $this->conn->prepare("SELECT * FROM login
                WHERE UserID = ? AND Pass = ?");

                $this->pass = hash("sha512", $this->pass);
                $stmt->execute([$_COOKIE["UserID"], $this->pass]);

                if($stmt->rowCount() != 1)
                    $errors .= "The given password is not correct! |";
                if($newPass != $newPassAgain)
                    $errors .= "The two passwords do not match! |";
                if(empty($errors)) {
                    $stmt = $this->conn->prepare("UPDATE login
                    SET Pass = ? WHERE UserID =?");

                    $newPass = hash("sha512", $newPass);
                    $stmt->execute([$newPass, $_COOKIE["UserID"]]); 
                } else {
                    throw new Exception($errors);
                }

                return true;
        }
    }

?>