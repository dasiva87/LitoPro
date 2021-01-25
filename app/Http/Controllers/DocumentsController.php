<?php

namespace App\Http\Controllers;
use App\models\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
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
        $document = Document::all();
        return $document;
    }


}
