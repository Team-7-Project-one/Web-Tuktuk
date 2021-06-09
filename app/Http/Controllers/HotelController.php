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

        return view('hotel',['data'=>$data, 'comment'=>$comment, 'reply'=>$reply]);
    }


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

        HotelReply::create([
            'name' => $request->nama,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/hotel');
    }

    public function adminhotel(Request $request){
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
            ->paginate(10);
        }
        else{
            $data = Hotel::paginate(10);
        }
        return view('DataHotel.adminhotel',['data'=>$data]);
    }

    public function create(Request $request){
        return view('DataHotel.tambah');
    }

        public function add(Request $request){

            $request->validate([
                'nama_hotel'=>'required',
                'lokasi'=>'required',
                'map'=>'required',
                'deskripsi'=>'required',
                'rating'=>'required',
                'kontak'=>'required',
                'harga'=>'required',
                'link'=>'required',
                'fasilitas'=>'required',
                'gambar1'=>'required',
                'gambar2'=>'required',
                'gambar3'=>'required',
            ]);
    
            $nama_hotel = $request->nama_hotel;
            $lokasi = $request->lokasi;
            $map = $request->map;
            $deskripsi = $request->deskripsi;
            $rating = $request->rating;
            $kontak = $request->kontak;
            $link = $request->link;
            $harga = $request->harga;
            $fasilitas = $request->fasilitas;
            $gambar1 = $request->file('gambar1');
            $Namagambar1 = time().'.'.$gambar1->extension();
            $gambar1->move(public_path('gambar1'),$Namagambar1);
            $gambar2 = $request->file('gambar2');
            $Namagambar2 = time().'.'.$gambar2->extension();
            $gambar2->move(public_path('gambar2'),$Namagambar2);
            $gambar3 = $request->file('gambar3');
            $Namagambar3 = time().'.'.$gambar3->extension();
            $gambar3->move(public_path('gambar3'),$Namagambar3);
    
            $hotel = new Hotel();
            $hotel->nama_hotel = $nama_hotel;
            $hotel->lokasi = $lokasi;
            $hotel->map = $map;
            $hotel->deskripsi = $deskripsi;
            $hotel->rating = $rating;
            $hotel->kontak = $kontak;
            $hotel->link = $link;
            $hotel->harga = $harga;
            $hotel->fasilitas = $fasilitas;
            $hotel->gambar1 = $Namagambar1;
            $hotel->gambar2 = $Namagambar2;
            $hotel->gambar3 = $Namagambar3;
            $hotel->save();
    
        return redirect('/dashboard/hotel')->with('success','Data Berhasil Ditambahkan');
        }

        public function edit($id)
        {
            $Hotel = Hotel::find($id);
            return view('DataHotel.ubah', ['Hotel' => $Hotel]);
        }

        public function update(Request $request,$id){

            if($request->file('gambar1')==NULL || $request->file('gambar2')==NULL || $request->file('gambar3')==NULL){
                $hotel = Hotel::find($id);
                $hotel->id = $request->id;
                $hotel->nama_hotel = $request->nama_hotel;
                $hotel->harga = $request->harga;
                $hotel->kontak = $request->kontak;
                $hotel->map = $request->map;
                $hotel->lokasi = $request->lokasi;
                $hotel->link = $request->link;
                $hotel->fasilitas = $request->fasilitas;
                $Namagambar1 = $request->Namagambar1;
                $Namagambar2 = $request->Namagambar2;
                $Namagambar3 = $request->Namagambar3;
                $hotel->deskripsi = $request->deskripsi;
                $hotel->save();
                return redirect('/dashboard/hotel')->with('success','Data Berhasil Diubah');
            }else{
                $gambar1 = $request->file('gambar1');
                $Namagambar1 = time().'.'.$gambar1->extension();
                $gambar1->move(public_path('gambar1'),$Namagambar1);
                $gambar2 = $request->file('gambar2');
                $Namagambar2 = time().'.'.$gambar2->extension();
                $gambar2->move(public_path('gambar2'),$Namagambar2);
                $gambar3 = $request->file('gambar3');
                $Namagambar3 = time().'.'.$gambar3->extension();
                $gambar3->move(public_path('gambar3'),$Namagambar3);
                $id = $request->$id;
                $nama_hotel = $request->nama_hotel;
                $nama_toko = $request->nama_toko;
                $pemilik = $request->pemilik;
                $bahan = $request->bahan;
                $tipe = $request->tipe;
                $ukuran = $request->ukuran;
                $warna = $request->warna;
                $harga = $request->harga;
                $kontak = $request->kontak;
                $map = $request->map;
                $lokasi = $request->lokasi;
                $deskripsi = $request->deskripsi;
    
    
            $hotel = Hotel::find($id);
            $hotel->id = $request->id;
            $hotel->nama_hotel = $request->nama_hotel;
            $hotel->nama_toko = $request->nama_toko;
            $hotel->pemilik = $request->pemilik;
            $hotel->bahan = $request->bahan;
            $hotel->tipe = $request->tipe;
            $hotel->ukuran = $request->ukuran;
            $hotel->warna = $request->warna;
            $hotel->harga = $request->harga;
            $hotel->kontak = $request->kontak;
            $hotel->map = $request->map;
            $hotel->lokasi = $request->lokasi;
            $hotel->gambar1 = $request->Namagambar1;
            $hotel->gambar2 = $request->Namagambar2;
            $hotel->gambar3 = $request->Namagambar3;
            $hotel->deskripsi = $Request->deskripsi;
    
            $hotel->save();
            return redirect('/dashboard/hotel')->with('success','Data Berhasil Diubah');
            }
    
        }

        public function destroy($id)
        {
            $Hotel = Hotel::find($id);
            $Hotel->delete();
            return redirect('/dashboard/hotel')->with('success','Data Berhasil Dihapus');
        }
    
        
    
}
