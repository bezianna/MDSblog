<?php
    
    if(isset($_POST["change_pass"])) {
        $userHandler = new UserHandler("", $_POST["old_pass"]);

        try {
            $success = $userHandler->ChangePass($_POST["pass"], $_POST["pass_again"]);
            if($success) {
                echo "<h3>Modification is successful!<?h3>";                
            }
        } catch(Exception $ex) {
            $errors = explode("|", $ex->getMessage());

            foreach($errors as $error) {
                echo "<h3>{$error}</h3>";
            }
        }
    }
?>

<div class="admin-content">
    <div class="content">
        <h1>Profile</h1>

        <form method="POST">
            <h3>Old password</h3>
            <input type="password" name="old_pass" class="text-input" placeholder="Old password">

            <h3>New password</h3>
            <input type="password" name="pass" class="text-input" placeholder="New password">

            <h3>New password again</h3>
            <input type="password" name="pass_again" class="text-input" placeholder="New password">
                <br/>

            <button name="change_pass" class="btn">Change password</button>
        </form>
    </div>
</div>