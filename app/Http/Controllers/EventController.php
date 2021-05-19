<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventComment;
use App\Models\EventReply;

class EventController extends Controller
{
    public function index(){

        $data = Event::all();
        $comment = EventComment::all();
        $reply = EventReply::all();
        return view('event',['data'=>$data, 'comment'=>$comment, 'reply'=>$reply]);
    }

    public function store(Request $request)
    {
        EventComment::create([
            'name' => $request->nama,
            'comment' => $request->comment,
        ]);
        return redirect('/event');
    }

    public function storeReply(Request $request)
    {
        // $Comment = Comment::find($id);
        EventReply::create([
            'name' => $request->nama,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/event');
    }
}
