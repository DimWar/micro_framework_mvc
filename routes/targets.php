<?php
// require 'bootstrap/init.php' ;
use App\Core\Routing\Route ;



Route::get('/','HomeController@index') ;
Route::get('/archive','ArchiveController@index') ;

// Route::get('/null',function(){
//     echo "null get ...!" ;
// }) ;

// Route::get('/b',function(){
//     echo "b..!" ;
// }) ;

// Route::get('/c',function(){
//     echo "c..!" ;
// }) ;

// Route::get('/d',function(){
//     echo "d..!" ;
// }) ;

// Route::put('/e',['controller','Method']) ;

// Route::put('/f','controller@Method') ;

Route::post('/a',function(){
    echo "a..!" ;
}) ;