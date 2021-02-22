<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Third;

class ThirdsController extends Controller{
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
        $third = Third::all();
        return $third;
    }

    function all (Request $request){
        $third = Third::all();
        return $third;
    }

    function create (Request $request){

        try {

        $user = Auth()->user();

        $third = new Third;

        $third->foto        = $request->foto;
        $third->foto_dir    = $request->foto_dir;
        $third->tipo        = $request->tipo;
        $third->nombre      = $request->nombre;
        $third->tipo_doc    = $request->tipo_doc;
        $third->numero_doc  = $request->numero_doc;
        $third->telefono    = $request->telefono;
        $third->celular     = $request->celular;
        $third->email       = $request->email;
        $third->direccion   = $request->direccionn;
        $third->user_id     = $user->id;                
        $third->business_id = $user->business_id;

        $third->save();

        return response()->json($third, 200);

        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    function update (Request $request){
        
        $id= $request->id;


        $third = Third::where('id', $id)->update([

            'foto'          => $request->foto,
            'foto_dir'      => $request->foto_dir,  
            'tipo'          => $request->tipo,
            'nombre'        => $request->nombre,  
            'tipo_doc'      => $request->tipo_doc,
            'numero_doc'    => $request->numero_doc,  
            'telefono'      => $request->telefono,
            'celular'       => $request->celular,
            'email'         => $request->email,
            'direccion'     => $request->direccion,
            'modified_at'   => $request->modified_at, 
        ]);

        return response()->json($id ,200);
    }
}