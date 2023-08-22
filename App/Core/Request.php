<?php
namespace App\Core ;

class Request{
    private $params ;
    private $method ;
    private $agent ;
    private $ip ;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'] ;
        $this->ip = $_SERVER['REMOTE_ADDR'] ;
        $this->agent = $_SERVER['HTTP_USER_AGENT'] ;
        $this->params = $_REQUEST ;
    }

    public function params(){
        return $this->params;
    }
    public function ip(){
        return $this->ip;
    }
    public function agent(){
        return $this->agent;
    }
    public function method(){
        return $this->method;
    }

}