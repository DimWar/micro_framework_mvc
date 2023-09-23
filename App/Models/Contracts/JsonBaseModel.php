<?php

namespace App\Models\Contracts ;

class JsonBaseModel extends BaseModel{
    private $db_folder ;
    public function __construct()
    {
        $this->db_folder = BASE_PATH . '/storage/jsondb';
    }
    #create - insert
    public function create(array $data):int {
        $table_filePath = $this->db_folder . '/' . $this->table . '.json';
        $table_data = json_decode(file_get_contents($table_filePath)) ;
        $table_data[] = $data ;
        $table_data_json = json_encode($table_data) ;
        file_put_contents($table_filePath,$table_data_json) ;
        nice_dump($table_data) ;
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