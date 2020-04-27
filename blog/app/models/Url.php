<?php

    class Url {
        public static function GetBaseUrl() {
        $host = $_SERVER["HTTP_HOST"];
        $localHostpath = "blog";
        $httpMethod = isset($_SERVER["HTTPS"]) ? "https://" : "http://";
        $baseUrl = "{$httpMethod}{$host}/{$localHostpath}";
        return $baseUrl;
        }
    }

?>