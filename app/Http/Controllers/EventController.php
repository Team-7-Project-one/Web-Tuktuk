<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $data=Event::all();
        return view('event',compact('data'));
    }
}
