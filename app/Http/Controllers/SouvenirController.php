<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souvenir;

class SouvenirController extends Controller
{
    public function index(){
        $data = Souvenir::all();
        return view('Souvenir.index', ['data'=>$data]);
    }
}
