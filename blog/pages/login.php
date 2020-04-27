<?php

    if(isset($_POST["login"])) {
        $userHandler = new UserHandler(
            $_POST["userName"], $_POST["pass"]
        );

        try {
            $userHandler->Login();
        } catch(Exception $ex) {
            echo $ex->getMessage();        
        }        
    }

?>

<div class="admin-content">
    <div class="content">
        <?php
            if(isset($_GET["successReg"]) && $_GET["successReg"] == 1) {
                echo "<h1>Registration is successful, you can now log in!</h1>";
            }
        ?>

        <form method="POST">
            <h3>Username</h3>
            <input type="text" name="userName" class="text-input" placeholder="username">

            <h3>Password</h3>
            <input type="password" name="pass" class="text-input" placeholder="password">

                <br/>
                
            <button name="login" class="btn">Login</button>
        </form>
    </div>
</div>