<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocietyController extends Controller
{
    //
    
    public function index(){
        $societies = \App\Models\Society::all();
        return view('societies.indextest',['societies' => $societies]);
    }
}
