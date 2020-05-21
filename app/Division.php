<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'DivisionesUG';

    protected $fillable = [
        'Division_Id', 'Nombre'
    ];
}
