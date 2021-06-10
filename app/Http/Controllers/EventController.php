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

        EventReply::create([
            'name' => $request->nama,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/event');
    }

    public function adminevent(){
        $data = Event::all();
        return view('DataEvent.adminevent',['data'=>$data]);
    }

    public function create(Request $request){
        return view('DataEvent.tambah');
    }

    public function add(Request $request){

        $request->validate([
            'nama_event'=>'required',
            'kategori'=>'required',
            'tgl_pelaksanaan'=>'required',
            'tgl_selesai'=>'required',
            'waktu'=>'required',
            'harga'=>'required',
            'lokasi'=>'required',
            'map'=>'required',
            'gambar'=>'required',
            'deskripsi'=>'required',
        ]);

        $nama_event = $request->nama_event;
        $kategori = $request->kategori;
        $tgl_pelaksanaan = $request->tgl_pelaksanaan;
        $tgl_selesai = $request->tgl_selesai;
        $waktu= $request->waktu;
        $harga = $request->harga;
        $lokasi = $request->lokasi;
        $map = $request->map;
        $deskripsi = $request->deskripsi;
        $gambar = $request->file('gambar');
        $Namagambar = time().'.'.$gambar->extension();
        $gambar->move(public_path('gambar'),$Namagambar);
        

        $event = new Event();
        $event->nama_event = $nama_event;
        $event->kategori = $kategori;
        $event->tgl_pelaksanaan = $tgl_pelaksanaan;
        $event->tgl_selesai = $tgl_selesai;
        $event->waktu = $waktu;
        $event->harga = $harga;
        $event->lokasi = $lokasi;
        $event->map = $map;
        $event->gambar = $Namagambar;
        $event->deskripsi = $deskripsi;
        $event->save();

    return redirect('/dashboard/event')->with('success','Data Berhasil Ditambahkan');
    }
    

    public function edit($id)
    {
        $Event = Event::find($id);
        return view('DataEvent.ubah', ['Event' => $Event]);
    }

    public function update(Request $request,$id){

        if($request->file('gambar')==NULL){
            $event = Event::find($id);
            $event->id = $request->id;
            $event->nama_event = $request->nama_event;
            $event->kategori = $request->kategori;
            $event->tgl_pelaksanaan = $request->tgl_pelaksanaan;
            $event->tgl_selesai = $request->tgl_selesai;
            $event->waktu = $request->waktu;
            $event->harga = $request->harga;
            $event->lokasi = $request->lokasi;
            $event->map = $request->map;
            $gambar = $request->gambar;
            $event->deskripsi = $request->deskripsi;
            $event->save();
            return redirect('/dashboard/event')->with('success','Data Berhasil Diubah');
        }else{
            $gambar = $request->file('gambar');
            $Namagambar = time().'.'.$gambar->extension();
            $gambar->move(public_path('gambar'),$Namagambar);
            
            $id = $request->id;
            $nama_event = $request->nama_event;
            $kategori = $request->kategori;
            $tgl_pelaksanaan = $request->tgl_pelaksanaan;
            $tgl_selesai = $request->tgl_selesai;
            $waktu = $request->waktu;
            $harga = $request->harga;
            $lokasi = $request->lokasi;
            $map = $request->map;
            $deskripsi = $request->deskripsi;


        $event = Event::find($id);
        $event->id = $request->id;
        $event->nama_event = $request->nama_event;
        $event->kategori = $request->kategori;
        $event->tgl_pelaksanaan = $request->tgl_pelaksanaan;
        $event->tgl_selesai = $request->tgl_selesai;
        $event->waktu = $request->waktu;
        $event->harga = $request->harga;
        $event->lokasi = $request->lokasi;
        $event->map = $request->map;
        $gambar = $Namagambar;
        $event->deskripsi = $request->deskripsi;

        $event->save();
        return redirect('/dashboard/event')->with('success','Data Berhasil Diubah');
        }

    }

    public function destroy($id)
    {
        $Event = Event::find($id);
        $Event->delete();
        return redirect('/dashboard/event')->with('success','Data Berhasil Dihapus');
    }


}
