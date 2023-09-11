<?php
// require 'bootstrap/init.php' ;
use App\Core\Routing\Route ;

use App\Middleware\BlockFirefox ;

#home
Route::get('/','HomeController@index') ;

#article 
Route::get('/archive','ArchiveController@index') ;
Route::get('/archive/products','ArchiveController@products') ;
Route::get('/archive/articles','ArchiveController@articles') ;
#users
Route::get('/users/list','UserController@list',[BlockFirefox::class]) ;

// Route::get('/panel','PostController@single',Auth::class) ;

Route::get('/post/{slug}','PostController@single') ;
// Route::get('/post/{slug}/comment/{comment_id}','PostController@single') ;






#examle
// Route::get('/null',function(){
//     echo "null get ...!" ;
// }) ;

// Route::put('/e',['controller','Method']) ;

// Route::put('/f','controller@Method') ;
