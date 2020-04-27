<?php

    class Articles extends Conn {
        private $articleID;
        private $title;
        private $shortDesc;
        private $articleText;

        public function __construct($title = "", $shortDesc = "",
        $articleText = "", $articleID = 0) {
            $this->title = $title;
            $this->shortDesc = $shortDesc;
            $this->articleText = $articleText;
            $this->articleID = $articleID;

            parent::__construct();
        }

        public function SetArticle() {
            if(!isset($_COOKIE["UserID"]) || $_COOKIE["RegType"] != 1)
                return;

            $stmt = $this->conn->prepare("INSERT INTO articles
            (UserID, Title, ShortDesc, Content, LastModified)
            VALUES(:UserID, :Title, :ShortDesc, :Content, :LastModified)");
            $dateTime = date("Y-m-d h:i:s");

            $stmt->execute([
                ":UserID"=>$_COOKIE["UserID"],
                ":Title"=>$this->title,
                ":ShortDesc"=>$this->shortDesc,
                ":Content"=>$this->articleText,
                ":LastModified"=>$dateTime
            ]);

            $lastInsertID = $this->conn->lastInsertId();
            header("location:http://localhost{$_SERVER["REQUEST_URI"]}&articleID={$lastInsertID}");
        }

        public function UpdateArticle() {
            if(!isset($_COOKIE["UserID"]) || $_COOKIE["RegType"] != 1)
                return;

            $stmt = $this->conn->prepare("UPDATE articles 
            SET Title = :Title, 
            ShortDesc = :ShortDesc, 
            Content = :Content, 
            LastModified = :LastModified 
            WHERE ArticleID = :ArticleID AND UserID = :UserID");

            $dateTime = date("Y-m-d h:i:s");

            $stmt->execute([
                ":Title"=>$this->title,
                ":ShortDesc"=>$this->shortDesc,
                ":Content"=>$this->articleText,
                ":LastModified"=>$dateTime,
                ":ArticleID"=>$this->articleID,
                ":UserID"=>$_COOKIE["UserID"]
            ]);
        }

        public function DeleteArticle($articleID) {
            if(!isset($_COOKIE["UserID"]) || $_COOKIE["RegType"] != 1)
                return;
            
            $stmt = $this->conn->prepare("DELETE FROM articles WHERE ArticleID = ?
            AND UserID =?");
            $stmt->execute([$articleID, $_COOKIE["UserID"]]);

            if($stmt->rowCount() != 1)
                throw new Exception("You are not entitled to delete another person's article!");

            return true;
        }

        public function Comment($comment, $articleID) {
            if(!isset($_COOKIE["UserID"]))
                return false;
            
            $comment = htmlspecialchars($comment, $articleID);
            $stmt = $this->conn->prepare("INSERT INTO comments
            (CommentText, UserID, ArticleID) VALUES(?,?,?)");

            $stmt->execute([$comment, $_COOKIE["UserID"], $articleID]);

            return true;
        }
    }
?>