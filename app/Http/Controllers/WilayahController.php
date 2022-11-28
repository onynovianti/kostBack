<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    public function getProvinsi(){
        return DB::table('provinces')->get();
    }

    public function getKota($id){
        return DB::table('regencies')->get()->where('province_id', $id);
    }

    public function getKecamatan($id){
        return DB::table('districts')->get()->where('regency_id', $id);
    }
}
