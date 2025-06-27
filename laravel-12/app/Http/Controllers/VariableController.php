<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariableController extends Controller
{
    
    function showname(){
        $name = "Enjang Setiawan";
        return view('halo.showname',['nama' => $name]);
    }
}
