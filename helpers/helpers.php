<?php

#ROUTE ADDRESS FUNCTION
function site_url(string $route):string{
    return $_ENV['SITE_URL'] . $route ;
}

#RANDOM ARRAY
function random_element(array $arr){
    shuffle($arr) ;
    return array_pop($arr) ;
}

#STANDARD PRINT
function dd(string|array $message){
    echo "<pre>" ;
    print_r($message) ;
    echo "</pre>" ;
    die() ;
}

function view($path) {
    #'errors.404'
    $path = str_replace('.','/',$path) ;
    require $view_full_path = BASE_PATH . "views/$path.php";
}