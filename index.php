<?php
use App\Core\Routing\Route ;
use App\Core\Routing\Router;

#INITALE FILE
require 'bootstrap/init.php' ;



// $router =  new Router() ;
// $router->run() ;

#new get route / slug , regex 101
$route = '/post/{slug}' ;

$pattern = "/^" . str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route) . "$/" ;

echo htmlspecialchars($pattern);

// $route_pattern = '/^\/post\/(?<slug>[-%\w]+)$/' ;
// $uri1 = '/post/what-is-user' ;
// $uri2 = '/post/what-is-ubuntu' ;
// $result = preg_match($route_pattern,$uri1,$matches) ;


