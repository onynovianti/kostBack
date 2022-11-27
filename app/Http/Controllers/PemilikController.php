<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pemilik;

class PemilikController extends Controller
{
    public function __construct(){
        return $this->middleware('isLogin');
    }

    // DASHBOARD
    public function index(){
        return view('pages.pemilik',[
             'judul' => 'Pengguna - Pemilik',
             'item' => DB::table('pemiliks')->paginate(10),
        ]);  
     }
 
     // Tampilan Create Admin
     public function create(){
         return view('pages.pemilik_add',[
            'judul' => 'Pemilik - Tambah Pemilik'
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
         Pemilik::create($validatedData); //untuk menyimpan data
         
         return redirect("/pemilik"); // untuk diarahkan kemana
     }
 
     // Tampilan Edit
     public function edit($id){
         return view("pages.pemilik_edit",[
             'judul' => 'Pemilik - Edit Pemilik',
             'item' => Pemilik::find($id),
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
         $user = Pemilik::find($id);
         $user->nama = $validatedData['nama'];
         $user->username = $validatedData['username'];
         $user->noHp = $validatedData['noHp'];
         $user->email = $validatedData['email'];
         $user->save();
         
         // toast('Your data has been saved!','success');
         return redirect("/pemilik"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
         Pemilik::destroy($id);
         // Session::flash('hapussuccess', 'Data berhasil dihapus!');
         // toast('Your data has been deleted!','success');
         return redirect("/pemilik"); // untuk diarahkan kemana
     } 
}
