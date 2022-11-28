<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Kost;
use App\Http\Controllers\WilayahController;


class KostController extends Controller
{
    public function __construct(){
        return $this->middleware('isLogin');
    }

    // DASHBOARD
    public function index(){
        return view('pages.kost',[
             'judul' => 'Properti - Kost',
             'item' => DB::table('kosts')->paginate(10),
        ]);  
     }
 
     // Tampilan Create Admin
     public function create(){
         return view('pages.kost_add',[
            'prov' => (new WilayahController)->getProvinsi(),
            'judul' => 'Kost - Tambah Kost'
         ]);
     }
 
     // Create Admin
     public function store(Request $request){
         $validatedData=$request->validate([
             'nama' => 'required',
             'alamat' => 'required|min:10',
             'provinsi' => 'required',
             'kota' => 'required',
             'kecamatan' => 'required'
         ]);
         Kost::create($validatedData); //untuk menyimpan data
         
         return redirect("/kost"); // untuk diarahkan kemana
     }
 
     // Tampilan Edit
     public function edit($id){
        $item = Kost::find($id);
         return view("pages.kost_edit",[
             'judul' => 'Kost - Edit Kost',
             'prov' => (new WilayahController)->getProvinsi(),
             'kot' => (new WilayahController)->getKota($item->provinsi),
             'kec' => (new WilayahController)->getKecamatan($item->kota),
             'item' => $item,
         ]);
     }
         
     // Simpan Hasil Edit
     public function update(Request $request, $id){
         $validatedData=$request->validate([
             'nama' => 'required',
             'alamat' => 'required|min:10',
             'provinsi' => 'required',
             'kota' => 'required',
             'kecamatan' => 'required'
         ]);
 
         // Menyimpan update
         $user = Kost::find($id);
         $user->nama = $validatedData['nama'];
         $user->alamat = $validatedData['alamat'];
         $user->provinsi = $validatedData['provinsi'];
         $user->kota = $validatedData['kota'];
         $user->kecamatan = $validatedData['kecamatan'];
         $user->save();
         
         // toast('Your data has been saved!','success');
         return redirect("/kost"); // untuk diarahkan kemana
     }
 
     // Hapus Data User
     public function destroy(Request $request, $id){
         Kost::destroy($id);
         // Session::flash('hapussuccess', 'Data berhasil dihapus!');
         // toast('Your data has been deleted!','success');
         return redirect("/kost"); // untuk diarahkan kemana
     }
}
