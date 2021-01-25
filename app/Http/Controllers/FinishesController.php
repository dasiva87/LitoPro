<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finishe;

class FinishesController extends Controller{

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
        $finishe = Finishe::all();
        return $finishe;
    }

}