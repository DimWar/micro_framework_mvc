<?php
namespace App\Core ;
use App\Utilities\Url ;

class Router{
    private $router ;
    public function __construct()
    {
        $this->router = [
            '/a/a' => 'colors/red.php' ,
            '/b/b' => 'colors/blue.php'  
        ];
    }

    public function run(){
        $current_route = Url::current_route() ;
        // var_dump($current_route) ;
        foreach($this->router as $route => $view ){
            if($route == $current_route){
                require BASE_PATH . "views/$view";
                die() ;
            }
            header("HTTP/1.0 404 Not Found") ;
            require BASE_PATH . 'views/error/404.php' ;
            die() ;
        }
    }
}
