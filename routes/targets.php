<?php
// require 'bootstrap/init.php' ;
use App\Core\Routing\Route ;


#home
Route::get('/','HomeController@index') ;

#article 
Route::get('/archive','ArchiveController@index') ;
Route::get('/archive/products','ArchiveController@products') ;
Route::get('/archive/articles','ArchiveController@articles') ;

#examle
// Route::get('/null',function(){
//     echo "null get ...!" ;
// }) ;

// Route::put('/e',['controller','Method']) ;

// Route::put('/f','controller@Method') ;
