<?php
#PATH ADDRESS
define('BASE_PATH',__DIR__ . '/../') ;

#COMPOSER AUTOLOAD
require BASE_PATH . '/vendor/autoload.php' ;

#DOTENVE USEAGE
$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

#REQUEST GLOBAL
$request = new \App\Core\Request() ;

#HELPERS FUNCTION
require BASE_PATH . 'helpers/helpers.php' ;
require BASE_PATH . 'routes/targets.php' ;