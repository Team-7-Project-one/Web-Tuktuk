<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelComment;
use App\Models\HotelReply;

class HotelController extends Controller
{
    public function index(Request $request){
        
        if($request->has('keyword')) {
            $comment = HotelComment::all();
            $reply = HotelReply::all();
            $data = Hotel::where('nama_hotel','LIKE','%'.$request->keyword.'%')
            ->orWhere('rating', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('harga', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('kontak', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('deskripsi', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('fasilitas', 'LIKE', '%'.$request->keyword.'%')
            ->paginate(6);
        }
        else{
            $data = Hotel::paginate(6);
            $comment = HotelComment::all();
            $reply = HotelReply::all();
        }
        // $data=SouvenirModel::all();
        return view('hotel',['data'=>$data, 'comment'=>$comment, 'reply'=>$reply]);
    }

    // public function createReply()
    // {
    //     $Hotel = Hotel::all();
    //     $Comment = Comment::all();
    //     $Reply = Reply::all();
    //     return view('hotel', compact('Hotel', 'Comment', 'Reply'));
    // }

    public function store(Request $request)
    {
        HotelComment::create([
            'name' => $request->nama,
            'comment' => $request->comment,
        ]);
        return redirect('/hotel');
    }

    public function storeReply(Request $request)
    {
        // $Comment = Comment::find($id);
        HotelReply::create([
            'name' => $request->nama,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/hotel');
    }

    
}
