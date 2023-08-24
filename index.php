<?php
use App\Core\Routing\Route ;
use App\Core\Routing\Router;

#INITALE FILE
require 'bootstrap/init.php' ;

// dd(Route::routes());

$router =  new Router() ;

$router->run() ;