<?php
namespace App\Utilities ;

class Url{
    public static function current_url(){
        return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public static function current_route(){
        return strtok($_SERVER['REQUEST_URI'],'?') ;
    }
}