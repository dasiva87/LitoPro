<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypePaper;

class TypePapersController extends Controller{
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
        $typePaper = TypePaper::all();
        return $typePaper;
    }
}