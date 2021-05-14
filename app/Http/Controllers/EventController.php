<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventController extends Controller
{
    public function index(){

        $data=EventModel::all();
        return view('event',compact('data'));
    }
}
