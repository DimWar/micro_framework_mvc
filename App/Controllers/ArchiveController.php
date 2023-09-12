<?php

namespace App\Controllers ;

class ArchiveController {
    public function index(){
        #models
        view('archive.index') ;
    }
    public function products(){
        #models
        view('archive.products') ;
    }
    public function articles(){
        #models
        view('archive.articles') ;
    }
}