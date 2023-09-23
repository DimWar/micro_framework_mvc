<?php

namespace App\Models\Contracts ;

class MysqlBaseModel extends BaseModel{
   
    #create - insert
    public function create(array $data):int {
        return 1;
    }

    #read - select | single record and multiple record
    public function find($id):object {
        return (object)[] ;
    }

    public function get(array $coluemns,array $where):array {
        return [] ;
    }

    #update 
    public function update(array $data,array $where):int {
        return 1 ;
    }

    #delete
    public function delete(array $where):int {
        return 1 ;
    }
}