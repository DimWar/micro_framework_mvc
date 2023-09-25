<?php

namespace App\Models\Contracts ;

abstract class BaseModel implements CrudInterface
{
    protected $connection ;
    protected $table ;
    protected $primaryKey = 'id' ;
    protected $pageSize = 10 ;
    protected $attribute = [] ;
    // protected function __construct()
    // {
    //     #if mysql => set connection mysql
    // }
    protected function getAttribute(){
        
    }
}