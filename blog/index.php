<?php
    //Instantiation (peldanyositas)
    include "app/init.php";
    $bootstrap = new Bootstrap;

    Security::CheckPagePermission();   //it is static, so no need to instantiate
    Security::Logout();
?>

<!DOCTYPE html>    
<html lang="en">
    <?php
        $bootstrap->LoadHead();
    ?>
<body>
    <?php
        $bootstrap->loadNav();
        $bootstrap->LoadPage();
        $bootstrap->LoadFooter();
    ?>
</body>
</html>