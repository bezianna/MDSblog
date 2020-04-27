<div class="admin-content">

    <?php  

        if(isset($_POST["registration"])) {
            $userHandler = new UserHandler(
                $_POST["userName"], $_POST["pass"],
                $_POST["email"], 0
            );

            try {
                $userHandler->Registration($_POST["passAgain"]);
            } catch(Exception $ex) {
                $errors = explode("|", $ex->getMessage());

                foreach($errors as $error) {
                    echo "<h3>{$error}</h3>";
                }
            }
        }


    ?>

    <div class="content">
        <h1>Registration</h1>

        <form method="POST">
            <h3>Username</h3>
            <input type="text" name="userName" class="text-input" placeholder="Username">

            <h3>Email address</h3>
            <input type="text" name="email" class="text-input" placeholder="Email address">

            <h3>Password</h3>
            <input type="password" name="pass" class="text-input" placeholder="Password">

            <h3>Password again</h3>
            <input type="password" name="passAgain" class="text-input" placeholder="Password again">

                <br/>

            <button name="registration" class="btn">Registration</button>
        </form>

    </div>
</div>

