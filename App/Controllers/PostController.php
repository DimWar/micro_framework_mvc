<?php
namespace App\Controllers ;

class PostController {
    public function single(){
        #model
        global $request ;
        $slug = $request->get_route_param('slug') ;
        echo 'slug' ;
    }
    public function comment(){
        #model
        global $request ;
        $cid = $request->get_route_param('cid') ;
        echo 'comment' ;
    }
}