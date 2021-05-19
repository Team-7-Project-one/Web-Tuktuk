<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souvenir;
use App\Models\SouvenirComment;
use App\Models\SouvenirReply;

class SouvenirController extends Controller
{
    public function index(Request $request){

        if($request->has('keyword')) {
            $data = Souvenir::where('nama_souvenir','LIKE','%'.$request->keyword.'%')
            ->orWhere('bahan', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('deskripsi', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('harga', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('nama_toko', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('pemilik', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('tipe', 'LIKE', '%'.$request->keyword.'%')
            ->paginate(6);
        }
        else{
            $data = Souvenir::paginate(6);
            $comment = SouvenirComment::all();
            $reply = SouvenirReply::all();
        }
        // $data=SouvenirModel::all();
        return view('souvenir',['data'=>$data, 'comment'=>$comment, 'reply'=>$reply]);
    }

    public function store(Request $request)
    {
        SouvenirComment::create([
            'name' => $request->nama,
            'comment' => $request->comment,
        ]);
        return redirect('/souvenir');
    }

    public function storeReply(Request $request)
    {
        // $Comment = Comment::find($id);
        SouvenirReply::create([
            'name' => $request->nama,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/souvenir');
    }


}
