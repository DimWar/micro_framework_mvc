<?php

namespace App\Models\Contracts ;

abstract class BaseModel implements CrudInterface{
    protected $connection ;
}