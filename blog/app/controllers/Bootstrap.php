<?php

    class Bootstrap {
        public function LoadHead() {
            include "common/head.php";
        }

        public function LoadNav() {
            include "common/nav.php";
        }

        public function LoadFooter() {
            include "common/footer.php";
        }

        //Checks if page exists
        public function LoadPage() {
            $page = isset($_GET["page"]) ? $_GET["page"] . ".php" : "home.php";
            $page = "pages/{$page}";

            if(file_exists($page))
                include $page;   
            else
                echo "<h1>The page you are looking for could not be found!</h1>";
        }
    }

?>