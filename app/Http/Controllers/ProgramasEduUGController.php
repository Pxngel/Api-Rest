<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ProgramasEduUG;
class ProgramasEduUGController extends Controller
{
    public function getOne(Request $request){

        $id = $request->id;
        $data = DB::table('ProgramasEduUG')->where('PE_Id',$id)->value('Nombre');
        return response()->json($data);



    }


    public function getAll(Request $request){


        $data = DB::table('ProgramasEduUG')->get();
        return response()->json($data);



    }
    public function getByDiv(Request $request){

        $id = $request->id;
        $data = DB::table('ProgramasEduUG')->select('PE_Id','Nombre')->where('Division_Id',$id)->get();
        return response()->json($data);



    }

    public function getByIds(Request $request){

        $id = $request->id;
        $division = $request->division;
        $data = DB::table('ProgramasEduUG')->select('Nombre')->where('Division_Id',$division)->where('PE_Id',$id)->get();
        return response()->json($data);



    }
}
