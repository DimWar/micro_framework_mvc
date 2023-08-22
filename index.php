<?php
#AOUTOLOAD COMPOSER 
require 'vendor/autoload.php' ;
#Front Controller
echo $_SERVER['REQUEST_URI'] ;

new App\Core\Request() ;
