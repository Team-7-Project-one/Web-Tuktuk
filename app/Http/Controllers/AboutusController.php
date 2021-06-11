<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        return view('aboutus');
    }

    public function index2(){
        return view('tuktuk');
    }
}
