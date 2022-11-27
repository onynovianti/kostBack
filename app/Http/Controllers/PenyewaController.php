<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Penyewa;

class PenyewaController extends Controller
{
    // DASHBOARD
    public function index(){
        return view('pages.penyewa',[
             'judul' => 'Pengguna - Penyewa',
             'item' => DB::table('penyewas')->paginate(10),
        ]);  
     }
 
     // Tampilan Create Admin
     public function create(){
         return view('pages.penyewa_add',[
            'judul' => 'Penyewa - Tambah'
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
         Penyewa::create($validatedData); //untuk menyimpan data
         
         return redirect("/penyewa"); // untuk diarahkan kemana
     }
 
     // Tampilan Edit
     public function edit($id){
         return view("pages.penyewa_edit",[
             'judul' => 'Penyewa - Edit Penyewa',
             'item' => Penyewa::find($id),
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
         $user = Penyewa::find($id);
         $user->nama = $validatedData['nama'];
         $user->username = $validatedData['username'];
         $user->noHp = $validatedData['noHp'];
         $user->email = $validatedData['email'];
         $user->save();
         
         // toast('Your data has been saved!','success');
         return redirect("/penyewa"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
         Penyewa::destroy($id);
         // Session::flash('hapussuccess', 'Data berhasil dihapus!');
         // toast('Your data has been deleted!','success');
         return redirect("/penyewa"); // untuk diarahkan kemana
     }  
}
