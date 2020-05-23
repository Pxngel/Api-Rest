<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function pruebas(Request $request){

        return "mamadas puras mamadas";

    }
    public function getAll(Request $request){

        $id = $request->id;
        $data = DB::table('Paciente')->get();
        return response()->json($data);



    }



    public function register (Request $request){

        $json = $request->all();

        $json = array_map('trim',$json);
          
        $params_array = $json;

        $validate  = \Validator::make($params_array,[
            'NUA' => 'required|unique:Paciente',
            'PrimerCont' => 'required',
            'Reinicio' => 'required',
            'Nombres' => 'required',
             'APaterno' => 'required',
             'AMaterno' => 'required',
              'Sexo' => 'required',
              'Edad' => 'required',
              'EstadoCivil' => 'required',
              'Telefono' => 'required',
              'FechaNacimiento' => 'required',
              'Estado' => 'required',
              'Municipio' => 'required',
              'CalleR' => 'required',
              'ColoniaR' => 'required',
              'NumeroR' => 'required',
              'CalleO' => 'required',
               'ColoniaO' => 'required',
               'NumeroO' => 'required',
               'ServicioSalud' => 'required',
               'NSS' => 'required',
               'FechaIngreso' => 'required',
               'Periodo' => 'required',
               'Campus' => 'required',
               'Division_Id' => 'required',
               'PE_Id' => 'required',
               'Recomendaciones' => 'required',
               'Correo' => 'email|unique:Paciente',
               'Contrasena' => 'required',
               'Observaciones' => 'required'
               //
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

                $user = new User();
                $user->NUA = $params_array['NUA'];
                $user->PrimerCont = $params_array['PrimerCont'];
                $user->Reinicio = $params_array['Reinicio'];
                $user->Nombres = $params_array['Nombres'];
                $user->APaterno = $params_array['APaterno'];
                $user->AMaterno = $params_array['AMaterno'];
                $user->Sexo = $params_array['Sexo'];
                $user->Edad = $params_array['Edad'];
                $user->EstadoCivil = $params_array['EstadoCivil'];
                $user->Telefono = $params_array['Telefono'];
                $user->FechaNacimiento = $params_array['FechaNacimiento'];
                $user->Estado = $params_array['Estado'];
                $user->Municipio = $params_array['Municipio'];
                $user->CalleR = $params_array['CalleR'];
                $user->ColoniaR = $params_array['ColoniaR'];
                $user->NumeroR = $params_array['NumeroR'];
                $user->CalleO = $params_array['CalleO'];
                $user->ColoniaO = $params_array['ColoniaO'];
                $user->NumeroO = $params_array['NumeroO'];
                $user->ServicioSalud = $params_array['ServicioSalud'];
                $user->NSS = $params_array['NSS'];
                $user->FechaIngreso = $params_array['FechaIngreso'];
                $user->Periodo = $params_array['Periodo'];
                $user->Campus = $params_array['Campus'];
                $user->Division_Id = $params_array['Division_Id'];
                $user->PE_Id = $params_array['PE_Id'];
                $user->Informacion = $params_array['Informacion'];
                $user->Correo = $params_array['Correo'];
                $user->Recomendaciones = $params_array['Recomendaciones'];
                $user->Contrasena = $pwd;
                $user->Observaciones = $params_array['Observaciones'];
                $user->role = 'Paciente';
                $user->save();

            $data = array(
                'status' => 'success',
                'code' => 200,
                'message' => ' usuario creado exitosamente'
            );
            }

        return response()->json($data,$data['code']);
    }














    public function login (Request $request){

        $jwtAuth = new \JwtAuth();

        $json = $request->input('json',null);
        $params = json_decode($json);
        $params_array = json_decode($json,true);

        $validate  = \Validator::make($params_array,[
            'NUA' => 'required',
            'Contrasena' => 'required',
        ]);

        if($validate->fails())

        $signup = array(
            'status' => 'error',
            'code' => 404,
            'message' => 'El usuario no se ha podido identificar',
            'errors' => $validate->errors()
        );

        else{
            $pwd = hash('sha256',$params->Contrasena);

            $signup =  $jwtAuth->signup($params->NUA,$pwd);

            if(!empty($params->getToken))

            $signup =  $jwtAuth->signup($params->NUA,$pwd,true);

        }

        return response()->json($signup,200);

    }



    public function update(Request $request){
        $token = $request->header('Authorization');
        $jwtAuth = new \JwtAuth();
        $checkToken = $jwtAuth->checkToken($token);

        $json = $request->input('json', null);
        $params_array = json_decode($json, true);

        if($checkToken && !empty($params_array)){


            $user = $jwtAuth->checkToken($token,true);


            $validate  = \Validator::make($params_array,[
                'NUA' => 'required|unique:Paciente',
                'Nombres' => 'required',
                 'APaterno' => 'required',
                 'AMaterno' => 'required',
                  'Sexo' => 'required',
                  'Edad' => 'required',
                  'EstadoCivil' => 'required',
                  'Telefono' => 'required',
                  'FechaNacimiento' => 'required',
                  'Estado' => 'required',
                  'Municipio' => 'required',
                  'CalleR' => 'required',
                  'ColoniaR' => 'required',
                  'NumeroR' => 'required',
                  'CalleO' => 'required',
                   'ColoniaO' => 'required',
                   'NumeroO' => 'required',
                   'ServicioSalud' => 'required',
                   'NSS' => 'required',
                   'FechaIngreso' => 'required',
                   'Periodo' => 'required',
                   'Campus' => 'required',
                   'Division_Id' => 'required',
                   'PE_Id' => 'required',
                   'Informacion' => 'required',
                   'Recomendacion' => 'required',
                   'Correo' => 'email|unique:Paciente,'.$user->sub,
                   'Observaciones' => 'required'
            ]);


                unset($params_array['NUA']);
                unset($params_array['role']);
                unset($params_array['Contrasena']);
                unset($params_array['created_at']);
                unset($params_array['remember_token']);


            $user_update = User::where('NUA',$user->sub)->update($params_array);


            $data = array(
                'status' => 'success',
                'code' => 200,
                'user' => $user,
                'changes' => $params_array
            );

        }else{

            $data = array(
                'status' => 'error',
                'code' => 400,
                'message' => 'El usuario no se ha podido identificar',
            );

        }

        return response()->json($data,$data['code']);

    }




    public function upload (Request $request){


        $data = array(
            'status' => 'error',
            'code' => 400,
            'message' => 'El usuario no se ha podido identificar',
        );


        return response()->json($data,$data['code']);
    }
}
