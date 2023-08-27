<?php

namespace App\Core\Routing ;

use App\Core\Request;
use Exception;

class Router{
    private $request ;
    private $routes ;
    private $current_route ;
    const BASE_CONTROLLERS = 'App\Controllers\\' ;
    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRout($this->request) ?? null;
        #run middleware
        $this->run_route_middleware() ;
    }
    #MIDDLEWARE
    private function run_route_middleware(){
        $middleware = $this->current_route['middleware'] ;
        foreach ($middleware as $middleware_class) {
            $middleware_obj = new $middleware_class ;
            $middleware_obj->handel(); 
        }

    }

    public function findRout(Request $request)
    {
        foreach($this->routes as $route){
            if(in_array($request->method(),$route['methods']) && $request->uri() == $route['uri']){
                return $route ;
            }
        }
        return null ;
    }

    public function dispatch404(){
        #header 404
        header('HTTP/1.0 404 Not Found');
        view('errors.404') ;
        #include file 404
    } 

    public function run(){
        #405 : invalid request method

        #404 : uri not exist
        if (is_null($this->current_route)) {
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);

    }
    private function dispatch($route){
        $action = $route['action'] ?? null;

        if (is_null($action) || empty($action)) {
            return ;
        }
        #action is function(){}
        if (is_callable($action)) {
            $action() ;
        }
        #action is [contriller@method]
        if (is_string($action)) {
            $action = explode('@' ,$action) ;

        }
        #action is [controller,method]
        if (is_array($action)) {
            $class_name = self::BASE_CONTROLLERS . $action[0] ;
            $method = $action[1] ;
            if (!class_exists($class_name)) {
                throw new \Exception('class not exist !') ;
            }
            $controller = new  $class_name ;
            if (!method_exists($controller,$method)) {
                throw new \Exception('method not exist !') ;
            }
            $controller->$method() ;
        }
    }
} 