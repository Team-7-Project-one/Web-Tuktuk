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
            $comment = SouvenirComment::all();
            $reply = SouvenirReply::all();
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
        SouvenirReply::create([
            'name' => $request->nama,
            'comment' => $request->comment,
            'comment_id' => $request->comment_id,
        ]);
        return redirect('/souvenir');
    }


    public function adminsouvenir(Request $request){
        if($request->has('keyword')) {
            $data = Souvenir::where('nama_souvenir','LIKE','%'.$request->keyword.'%')
            ->orWhere('bahan', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('deskripsi', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('harga', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('lokasi', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('nama_toko', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('pemilik', 'LIKE', '%'.$request->keyword.'%')
            ->orWhere('tipe', 'LIKE', '%'.$request->keyword.'%')
            ->paginate(10);
        }
        else{
            $data = Souvenir::paginate(10);
        }
        // $data=SouvenirModel::all();
        return view('DataSouvenir.adminsouvenir',['data'=>$data]);

    }

    public function create(Request $request)
    {
        return view('DataSouvenir.tambah');
    }

    public function add(Request $request){

        $request->validate([
            'nama_souvenir'=>'required',
            'nama_toko'=>'required',
            'pemilik'=>'required',
            'bahan'=>'required',
            'tipe'=>'required',
            'ukuran'=>'required',
            'warna'=>'required',
            'harga'=>'required',
            'kontak'=>'required',
            'map'=>'required',
            'lokasi'=>'required',
            'gambar1'=>'required',
            'gambar2'=>'required',
            'gambar3'=>'required',
            'deskripsi'=>'required',
        ]);

        $nama_souvenir = $request->nama_souvenir;
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
        $gambar1 = $request->file('gambar1');
        $Namagambar1 = time().'.'.$gambar1->extension();
        $gambar1->move(public_path('gambar1'),$Namagambar1);
        $gambar2 = $request->file('gambar2');
        $Namagambar2 = time().'.'.$gambar2->extension();
        $gambar2->move(public_path('gambar2'),$Namagambar2);
        $gambar3 = $request->file('gambar3');
        $Namagambar3 = time().'.'.$gambar3->extension();
        $gambar3->move(public_path('gambar3'),$Namagambar3);
        $deskripsi = $request->deskripsi;

        $Souvenir = new Souvenir();
        $Souvenir->nama_souvenir = $nama_souvenir;
        $Souvenir->nama_toko = $nama_toko;
        $Souvenir->pemilik = $pemilik;
        $Souvenir->bahan = $bahan;
        $Souvenir->tipe = $tipe;
        $Souvenir->ukuran = $ukuran;
        $Souvenir->warna = $warna;
        $Souvenir->harga = $harga;
        $Souvenir->kontak = $kontak;
        $Souvenir->map = $map;
        $Souvenir->lokasi = $lokasi;
        $Souvenir->gambar1 = $Namagambar1;
        $Souvenir->gambar2 = $Namagambar2;
        $Souvenir->gambar3 = $Namagambar3;
        $Souvenir->deskripsi = $deskripsi;
        $Souvenir->save();

    return redirect('/dashboard/souvenir')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $Souvenir = Souvenir::find($id);
        return view('DataSouvenir.ubah', ['Souvenir' => $Souvenir]);
    }

    public function update(Request $request,$id){

        if($request->file('gambar1')==NULL || $request->file('gambar2')==NULL || $request->file('gambar3')==NULL){
            $Souvenir = Souvenir::find($id);
            $Souvenir->id = $request->id;
            $Souvenir->nama_souvenir = $request->nama_souvenir;
            $Souvenir->nama_toko = $request->nama_toko;
            $Souvenir->pemilik = $request->pemilik;
            $Souvenir->bahan = $request->bahan;
            $Souvenir->tipe = $request->tipe;
            $Souvenir->ukuran = $request->ukuran;
            $Souvenir->warna = $request->warna;
            $Souvenir->harga = $request->harga;
            $Souvenir->kontak = $request->kontak;
            $Souvenir->map = $request->map;
            $Souvenir->lokasi = $request->lokasi;
            $Namagambar1 = $request->Namagambar1;
            $Namagambar2 = $request->Namagambar2;
            $Namagambar3 = $request->Namagambar3;
            $Souvenir->deskripsi = $request->deskripsi;
            $Souvenir->save();
            return redirect('/dashboard/souvenir')->with('success','Data Berhasil Diubah');
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
            $nama_souvenir = $request->nama_souvenir;
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


        $Souvenir = Souvenir::find($id);
        $Souvenir->id = $request->id;
        $Souvenir->nama_souvenir = $request->nama_souvenir;
        $Souvenir->nama_toko = $request->nama_toko;
        $Souvenir->pemilik = $request->pemilik;
        $Souvenir->bahan = $request->bahan;
        $Souvenir->tipe = $request->tipe;
        $Souvenir->ukuran = $request->ukuran;
        $Souvenir->warna = $request->warna;
        $Souvenir->harga = $request->harga;
        $Souvenir->kontak = $request->kontak;
        $Souvenir->map = $request->map;
        $Souvenir->lokasi = $request->lokasi;
        $Souvenir->gambar1 = $request->Namagambar1;
        $Souvenir->gambar2 = $request->Namagambar2;
        $Souvenir->gambar3 = $request->Namagambar3;
        $Souvenir->deskripsi = $Request->deskripsi;

        $Souvenir->save();
        return redirect('/dashboard/souvenir')->with('success','Data Berhasil Diubah');
        }

    }

    public function destroy($id)
    {
        $Souvenir = Souvenir::find($id);
        $Souvenir->delete();
        return redirect('/dashboard/souvenir')->with('success','Data Berhasil Dihapus');
    }
}
