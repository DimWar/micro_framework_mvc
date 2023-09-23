<?php
use App\Core\Routing\Route ;
use App\Core\Routing\Router;
use App\Models\User;

#INITALE FILE
require 'bootstrap/init.php' ;
$arr = [
    'id' => rand(5,100) ,
    'name' => 'rand name'
];
$newUser = new User ;
$newUser->create($arr) ;

// $router = new Router() ;
// $router->run() ;









