<?php

namespace App\Http\Controllers;
use App\models\User;
use App\models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    //

    function index (Request $request){
        $user = User::all();
        //$user -> name = 'darwin';
        //$user -> email = 'darwin@gmail.com';
        return $user;
    }

    function registrer (Request $request){
        $user = new User;
        $user->codigo        = $request->codigo;
        $user->nombre        = $request->nombre; 
        $user->tipo_doc      = $request->tipo_doc;
        $user->numero_doc    = $request->numero_doc;
        $user->telefono      = $request->telefono; 
        $user->celular       = $request->celular;
        $user->email         = $request->email; 
        $user->password      = Hash::make($request->password);
        $user->direccion     = $request->direccion; 
        $user->user_name     = $request->user_name;
        $user->business_id   = $request->business_id; 

        if ($user->save()) {
            return response()->json([
                'response' => 'usuario creado correctamente',
                'user' => $user
            ],201);
        }
        return response()->json([
                'response' => 'error al registrar al usuario'
            ],404);
    }

    function login (Request $request){
        $user = User::where('user_name', $request->user_name)->first();
        if ($user && Hash::check($request->password, $user->password)){
            $user->api_token = Str::random(32);
            $user->save();
            return response()->json([
                'response' => 'Bienvenido',
                'api_token' => $user->api_token
            ],201);
        }
        return response()->json([
            'response' => 'El Usuario o al contraseña son incorrectos'
        ],404);

    }

}
