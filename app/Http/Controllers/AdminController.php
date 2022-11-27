<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    // DASHBOARD
    public function index(){
        return view('pages.admin',[
             'judul' => 'Pengguna - Administrator',
             'item' => DB::table('admins')->paginate(10),
        ]);  
     }
 
     // Tampilan Create Admin
     public function create(){
         return view('pages.admin_add',[
            'judul' => 'Administrator - Tambah Administrator'
         ]);
     }
 
     // Create Admin
     public function store(Request $request){
         $validatedData=$request->validate([
             'nama' => 'required',
             'username' => 'required|min:5',
             'password' => 'required|min:5',
             'noHp' => 'required',
             'email' => 'required'
         ]);
         $validatedData['password']=bcrypt($request->password);
         $validatedData['status'] = 1;
         Admin::create($validatedData); //untuk menyimpan data
         
         return redirect("/admin"); // untuk diarahkan kemana
     }
 
     // Tampilan Edit
     public function edit($id){
         return view("pages.admin_edit",[
             'judul' => 'Administrator - Edit Administrator',
             'item' => Admin::find($id),
         ]);
     }
         
     // Simpan Hasil Edit
     public function update(Request $request, $id){
         $validatedData=$request->validate([
            'nama' => 'required',
            'username' => 'required|min:5',
            'noHp' => 'required',
            'email' => 'required',
         ]);
 
         // Menyimpan update
         $user = Admin::find($id);
         $user->nama = $validatedData['nama'];
         $user->username = $validatedData['username'];
         $user->noHp = $validatedData['noHp'];
         $user->email = $validatedData['email'];
         $user->save();
         
         // toast('Your data has been saved!','success');
         return redirect("/admin"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
         Admin::destroy($id);
         // Session::flash('hapussuccess', 'Data berhasil dihapus!');
         // toast('Your data has been deleted!','success');
         return redirect("/admin"); // untuk diarahkan kemana
     }  
}
