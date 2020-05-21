<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'ContactoEmergencia';

    protected $fillable = [
        'Nua', 'Nombres','APaternos','AMaterno','Telefono','Calle','Colonia','Numero'
    ];
}
