<?php

namespace App\Core\Routing ;

use App\Core\Request;
use Exception;

class Router{
    private $request ;
    private $routes ;
    private $current_route ;
    const BASE_CONTROLLERS = 'App\Controllers\\' ;
    #quantification privete varables
    public function __construct(){
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;
        #run middleware
        $this->run_route_middleware() ;
    }
    #middleware
    private function run_route_middleware(){
        $middleware = $this->current_route['middleware'] ;
        foreach ($middleware as $middleware_class) {
            $middleware_obj = new $middleware_class ;
            $middleware_obj->handel(); 
        }
    }
    
    #find current route in routes
    public function findRoute(Request $request){ 
        foreach($this->routes as $route){
            if(!in_array($request->method(),$route['methods'])){ // && $request->uri() == $route['uri']
                return false ;
            }
            if ($this->regex_matched($route)) {
                return $route ;
            }
        }
        return null ;
    }

    #regex route for example / post/{slog} = > post/145
    public function  regex_matched($route){
        global $request ;
        $pattern = "/^" . str_replace(['/','{','}'],['\/','(?<','>[-%\w]+)'],$route['uri']) . "$/" ;
        $result = preg_match($pattern,$this->request->uri(),$matches) ;
        if (!$result) {
            return false ;
        }
        #integer | staring
        foreach($matches as $key => $values){
            if (!is_int($key)) {
                $request->add_route_param($key,$values);
            }
        }
        return true ;
    }

    
    #error 404
    public function dispatch404(){
        #header 404
        header('HTTP/1.0 404 Not Found');
        view('errors.404') ;
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

    #router run
    public function run(){
        #405 : invalid request method

        #404 : uri not exist
        if (is_null($this->current_route)) {
            $this->dispatch404();
        }
        $this->dispatch($this->current_route);
    }
} 