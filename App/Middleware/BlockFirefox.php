<?php

namespace App\Middleware ;

use App\Middleware\Contract\MiddlewareInterface ;

class BlockFirefox implements MiddlewareInterface{
    public function handel(){
        global $request ;
        var_dump($request) ;
    }
}