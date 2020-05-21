<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'Paciente';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NUA', 'PrimerCont', 'Reinicio', 'Nombres', 'APaterno', 'AMaterno', 'fotografia', 'Sexo', 'Edad', 'EstadoCivil', 'telefono', 'FechaNacimiento', 'Estado', 'Municipio', 'CalleR', 'ColoniaR', 'NumeroR', 'CalleO', 'ColoniaO', 'NumeroO', 'ServicioSalud', 'NSS', 'FechaIngreso', 'Periodo', 'Campus', 'Division_Id', 'PE_Id', 'Informacion', 'Correo', 'Contrasena', 'Recomendaciones', 'Observaciones', 'created_at', 'updated_at', 'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Contrasena', 'remember_token', 'role',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
