<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeSheet;

class TypeSheetsController extends Controller{
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
        $typeSheet = TypeSheet::all();
        return $typeSheet;
    }
}