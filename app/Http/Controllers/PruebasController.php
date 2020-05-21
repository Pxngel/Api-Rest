<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;


class PruebasController extends Controller
{


    public function ORM(){

        $divisions =  Division::all();

        foreach ($divisions as $division)
        echo "<h1>".$division->Division_Id;
        die();
    }

}
