<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('/login');
    }
    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email'=>['required'],
            'password'=>['required']
        ]);
        if(Auth::attempt($validasi)){
            return redirect('/index');
        }else{
            return back()->withErrors([
                'email'=>'maaf, email anda salah',
            ]);
        }
        return redirect()->back()->with('pesan','mohon maaf login anda gagal');
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function home(){
        $data['artikel'] = Artikel::all();
        return view('home', $data);
    }
    public function kategorihias(){
        return view('/kategorihias');
    }
    public function kategoribuah(){
        return view('/kategoribuah');
    }
    public function tentangkami(){
        return view('/tentangkami');
    }
    public function detailmawar($id){
        $data['artikel'] = Artikel::where('id',$id)->first();
        return view('detailmawar', $data);
    }
    public function detailanggrek(){
        return view('/detailanggrek');
    }
    public function detailjandabolong(){
        return view('/detailjandabolong');
    }
    public function detaildahlia(){
        return view('/detaildahlia');
    }
    public function detailstroberi(){
        return view('/detailstroberi');
    }
    public function detailanggur(){
        return view('/detailanggur');
    }
    public function detailjeruk(){
        return view('/detailjeruk');
    }
    public function detaildurian(){
        return view('/detaildurian');
    }
    public function tipsperawatan(){
        return view('/tipsperawatan');
    }

}
