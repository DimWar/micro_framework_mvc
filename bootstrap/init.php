<?php
#PATH ADDRESS
define('BASE_PATH',__DIR__ . '/../') ;
#AOUTOLOAD COMPOSER 
require BASE_PATH . '/vendor/autoload.php' ;
#DOTENVE USEAGE
$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();