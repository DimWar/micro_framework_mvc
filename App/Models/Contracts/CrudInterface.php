<?php

namespace App\Models\Contracts ;

interface CrudInterface {
    #create - insert
    public function create(array $data):int ;

    #read - select | single record and multiple record
    public function find($id):object ;
    public function get(array $coluemns,array $where):array ;

    #update 
    public function update(array $data,array $where):int ;

    #delete
    public function delete(array $where):int ;
}