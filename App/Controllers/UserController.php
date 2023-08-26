<?php

namespace App\Controllers ;

class UserController {
    public function list(){
        $data = [
            'list' => [ 1=>'ali' , 2=>'reza' ,3=> 'mamad'  ] 
        ] ;
        view('users.list' , $data) ;
    }
}