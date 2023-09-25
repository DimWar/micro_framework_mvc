<?php

namespace App\Models ;

use App\Models\Contracts\MysqlBaseModel;

class UserSql extends MysqlBaseModel{
    protected $table = 'users' ;
}