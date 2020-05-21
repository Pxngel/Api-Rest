<?php
namespace App\Helpers;
use Firebase\JWT\JWT;
use Iluminate\Support\Facades\DB;
use App\User;


    class JwtAuth{
    public $key;

        public function __construct(){

        $this->key='Tacos_12$%';

        }
                public function signup($Nua,$password,$getToken=NULL){
                    $user = User::where([
                        'NUA' => $Nua,
                        'Contrasena'=>$password

                    ])->first();

                        $singup = false;
                        if(is_object($user)){

                            $singup = true;

                        }
                    if($singup){

                        $token= array(
                            'sub' => $user->NUA,
                            'email'=> $user->Correo,
                            'name' => $user->Nombres,
                            'iat' => time(),
                            'exp' => time() + (3600)
                        );

                        $jwt= JWT::encode($token,$this->key,'HS256');
                        $decoded = JWT::decode($jwt,$this->key,['HS256']);
                        if(is_null($getToken))
                            $data = $jwt;
                        else
                            $data = $decoded;

                    }else{

                        $data = array(
                            'status' => 'error',
                            'message' => 'Login Incorrecto'
                        );

                    }

                    return $data;
                }




                public function checkToken($jwt,$getIdentity = false){


                    $auth = false;
                    try{
                    $jwt = \str_replace('"','',$jwt);
                    $decoded = JWT::decode($jwt,$this->key,['HS256']);
                    }catch(\UnexpectedValueException $e){
                        $auth=false;
                    }catch(\DomainException $e){
                        $auth = false;
                    }

                    if(!empty($decoded) && is_object($decoded) && isset($decoded->sub)){
                        $auth=true;
                    }else

                        $auth=false;

                        if($getIdentity){
                            return $decoded;
                        }


                        return $auth;
                }


}
