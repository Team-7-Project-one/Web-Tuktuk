<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('adminlogin');
    }

    public function login(Request $request){
        // dd($request->all());
        $data = Admin::where('username',$request->username)->first();
        // $data2 = \Hash::check($request->password,$data->password);
        if($data){
            if(\Hash::check($request->password,$data->password)){
                session(['berhasil_login' => true]);
                return redirect('dashboard');
            }
            return redirect('admin')-> with('message','Email atau Password anda Salah');
        }
        return redirect('admin')-> with('message','Email atau Password anda Salah');    
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('admin');
    }
}
