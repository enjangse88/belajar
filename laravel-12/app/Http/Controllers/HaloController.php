<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HaloController extends Controller
{
    function index(){
        //echo "<h1> Halo dari HaloController</h1>";
        return view('halo.halocontrollerblade');
    }
}
