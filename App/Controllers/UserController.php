<?php

namespace App\Controllers ;

class UserController {
    public function list(){
        #model
        $data = [
            'list' => [ 1=>'ali' , 2=>'reza' ,3=> 'mamad',4=> 'mohasen'  ] 
        ] ;
        view('users.list' , $data) ;
    }
}