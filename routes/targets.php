<?php
// require 'bootstrap/init.php' ;
use App\Core\Routing\Route ;

Route::get('/null',function(){
    echo "null / get ...!" ;
}) ;


Route::post('/a',function(){
    echo "//a..!" ;
}) ;

Route::get('/b',function(){
    echo "//b..!" ;
}) ;

Route::get('/c',function(){
    echo "//c!" ;
}) ;

Route::get('/d',function(){
    echo "//d!" ;
}) ;

Route::put('/e',['controller','Method']) ;

Route::get('/f','controller@Method') ;