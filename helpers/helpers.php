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

function view($path,$data = []) {
    #'errors.404'
    extract($data) ;
    $path = str_replace('.','/',$path) ;
    require $view_full_path = BASE_PATH . "views/$path.php";
}

function strContains($str,$needle,$case_sensitive = 0)
{
    if($case_sensitive)
        $pos = strpos($str,$needle);
    else
        $pos = stripos($str,$needle);
    
    return ($pos !== false) ? true : false;
}

function nice_dump($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function nice_dd($var)
{
    nice_dump($var);
    die();
}

function printHtmlSpecialChars($regex){
    echo htmlspecialchars($regex) ;
}
