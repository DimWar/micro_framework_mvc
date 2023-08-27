<?php

namespace App\Middleware ;
use hisorange\BrowserDetect\Parser as Browser;

use App\Middleware\Contract\MiddlewareInterface ;

class BlockFirefox implements MiddlewareInterface{
    public function handel(){
        global $request ;
        #web brows firefox is block
        if(Browser::isFirefox()){
            die('firefox was blocks') ;
        }

        echo "firedox blocker!!" ;
    }
}