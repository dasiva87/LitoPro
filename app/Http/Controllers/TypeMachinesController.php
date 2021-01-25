<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeMachine;

class TypeMachinesController extends Controller{
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
        $typeMachine = TypeMachine::all();
        return $typeMachine;
    }
}