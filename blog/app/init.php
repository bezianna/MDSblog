<?php

    function Draw($array) {
        echo "<pres>";
        print_r($array);
        echo "</pres>";
    }

    include "models/Conn.php";
    include "models/Url.php";
    include "controllers/ArticleController.php";
    include "models/UserHandler.php";
    include "models/Articles.php";
    include "models/Security.php";
    include "controllers/Bootstrap.php";

?>