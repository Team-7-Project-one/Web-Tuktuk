<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(Request $request){
        if($request->has('keyword')) {
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
        }
        // $data=SouvenirModel::all();
        return view('hotel',['data'=>$data]);
    }
    
}
