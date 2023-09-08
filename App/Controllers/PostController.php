<?php
namespace App\Controllers ;

class PostController {
    public function single(){
        #model
        global $request ;
        nice_dump($request->get_route_param('slug')) ;
    }
}