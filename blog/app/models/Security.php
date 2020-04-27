<?php

    class Security extends Conn {
        public static function CheckPagePermission() {    //checks if user is entitled to see the page, if any of the properties missing, returns back to base page
            $protectedPages = ["profile", "article", "admin_articles"];

            if(isset($_GET["page"]) && in_array($_GET["page"], $protectedPages) &&
            (!isset($_COOKIE["UserID"]) || !isset($_COOKIE["UserName"])
            || !isset($_COOKIE["RegType"]))) {
                $baseUrl = Url::GetBaseUrl();
                header("location:{$baseUrl}");
            
            }
        }

        public static function Logout() {
            if(isset($_GET["logout"])) {    //checks if logout exists, if yes, deletes cookies, cookie is expired one day ago
                setcookie("UserName", "", time()-86400, "/", "", false, true);
                setcookie("UserID", 0, time()-86400, "/", "", false, true);
                setcookie("RegType", 0, time()-86400, "/", "", false, true);
            
                $baseUrl = Url::GetBaseUrl();
                header("location:{$baseUrl}");
            } 
        }   
    }

?>