<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use Illuminate\Support\Facades\DB;
class DivisionController extends Controller
{


    public function getOne(Request $request){

        $id = $request->id;
        $data = DB::table('DivisionesUG')->where('Division_id',$id)->value('Nombre');
        return response()->json($data);



    }


    public function getAll(Request $request){

        $id = $request->id;
        $data = DB::table('DivisionesUG')->get();
        return response()->json($data);



    }
}
