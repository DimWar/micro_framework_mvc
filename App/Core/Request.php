<?php
namespace App\Core ;

class Request{
    private $params ;
    private $method ;
    private $agent ;
    private $ip ;
    private $uri ;
    private $browsAgant;

    public function __construct()
    {
        $this->browsAgant = $_SERVER['HTTP_USER_AGENT'];
        $this->method = strtolower($_SERVER['REQUEST_METHOD']) ;
        $this->ip = $_SERVER['REMOTE_ADDR'] ;
        $this->agent = $_SERVER['HTTP_USER_AGENT'] ;
        $this->params = $_REQUEST ;
        $this->uri = strtok($_SERVER['REQUEST_URI'],'?') ;
    }

    public function params(){
        return $this->params ;
    }
    public function ip(){
        return $this->ip ;
    }
    public function agent(){
        return $this->agent ;
    }
    public function method(){
        return $this->method ;
    }
    public function uri(){
        return $this->uri ;
    }

}