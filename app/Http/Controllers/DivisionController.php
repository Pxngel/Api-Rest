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


    public function register (Request $request){

        $json = $request->all();

        $params_array = $json;
        $validate  = \Validator::make($json,[
            "Nombre" => "required|alpha"

            ]);
            if($validate->fails())

            $data = array(
                'status' => 'error',
                'code' => 404,
                'message' => 'Division no creada',
                'errors' => $validate->errors()
            );

            else{

                $user = new Division();
                $user->Nombre = $params_array['Nombre'];
                $user->save();

                $data = array(
                    'status' => 'success',
                    'code' => 200,
                    'message' => ' Division creada exitosamente'
                );
            }

            return response()->json($data,$data['code']);

    }


}
