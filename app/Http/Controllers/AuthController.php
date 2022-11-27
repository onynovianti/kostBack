<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Alert;

class AuthController extends Controller
{
    // Halaman Login
    public function login(){
        if(session('isLogin') == true){
            return redirect('/admin');
        }
        return view('login',[
            'judul' => 'Login',
        ]);
    }
    
    // Cek login
    public function store(Request $request){
        $user = DB::table('admins')->where('username', $request->username)->first();

        //jika password benar
        if($user){
            if(Hash::check($request->password,$user->password)){
                session([
                    'isLogin' => true,
                    'username' => $user->username,
                    'namaLengkap' => $user->nama,
                    ]);
                // return redirect('/'.$request->role);
                return redirect('/admin');
            }
            //jika password salah
            return redirect('/')->with('error_password', 'Password Tidak Cocok');
        }
        
        //jika username tidak ada
        return redirect('/')->with('error_username', 'Username Tidak Ditemukan');
    }
    
    // Logout
    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
