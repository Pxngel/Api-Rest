<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramasEduUG extends Model
{
    protected $table = 'ProgramasEduUG';

    protected $fillable = [
        'PE_Id', 'Nombre'
    ];
}
