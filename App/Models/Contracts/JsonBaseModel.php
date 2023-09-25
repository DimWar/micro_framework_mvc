<?php

namespace App\Models\Contracts ;

class JsonBaseModel extends BaseModel{
    private $db_folder ;
    private $table_filePath ;

    public function __construct()
    {
        $this->db_folder = BASE_PATH . '/storage/jsondb';
        $this->table_filePath = $this->db_folder . '/' . $this->table . '.json';
    }

    private function read_table(){
            $table_data = json_decode(file_get_contents($this->table_filePath)) ;
            return $table_data ;
    }
    private function write_json(array $data){
        $data_json = json_encode($data) ;
        file_put_contents($this->table_filePath,$data_json) ;
    }
    
    #create - insert   
    public function create(array $data):int {
        $table_data = $this->read_table($data);
        $table_data[] = $data ;
        $this->write_json($table_data);
        return 1;
    }

    #read - select | single record and multiple record
    public function find($id):object {
        $table_data = $this->read_table();
        foreach ($table_data as $row) {
            if($row->{$this->primaryKey} == $id){
                return $row ;
            }
        }
        return null ;
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