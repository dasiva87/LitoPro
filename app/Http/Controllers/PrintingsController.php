<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Printing;

class PrintingsController extends Controller{
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
        $printing = Printing::all();
        return $printing;
    }
}