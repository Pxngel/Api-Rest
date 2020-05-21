<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contacto;
class ContactoController extends Controller
{

    public function register (Request $request){

        $json = $request->input('json', null);
        $params = json_decode( $json );
        $params_array = json_decode( $json, true );
        if(!empty($params) && !empty($params_array)){
        $params_array = array_map('trim',$params_array);

        $validate  = \Validator::make($params_array,[
            'NUA' => 'required|unique:ContactoEmergencia',
            'Nombres' => 'required',
             'APaterno' => 'required',
             'AMaterno' => 'required',
              'Telefono' => 'required',
              'CalleC' => 'required',
              'ColoniaC' => 'required',
              'NumeroC' => 'required',

        ]);

            if($validate->fails())

                $data = array(
                    'status' => 'error',
                    'code' => 404,
                    'message' => 'El usuario no se ha creado',
                    'errors' => $validate->errors()
                );
            else{
                $pwd = hash('sha256',$params->Contrasena);

                $user = new Contacto();
                $user->NUA = $params_array['NUA'];
                $user->Nombres = $params_array['NombresC'];
                $user->APaterno = $params_array['APaternoC'];
                $user->AMaterno = $params_array['AMaternoC'];
                $user->Telefono = $params_array['TelefonoC'];
                $user->Calle = $params_array['CalleC'];
                $user->Colonia = $params_array['ColoniaC'];
                $user->Numero = $params_array['NumeroC'];
                $user->save();

            $data = array(
                'status' => 'success',
                'code' => 200,
                'message' => ' usuario creado exitosamente'
            );
            }
        }else{


        $data = array(
            'status' => 'error',
            'code' => 404,
            'message' => 'Datos Incorrectos',

        );

    }
        return response()->json($data,$data['code']);
    }



}
