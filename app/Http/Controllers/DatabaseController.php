<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatabaseController extends Controller
{
    public function index()
    {
        DB::table('pemiliks')->delete();
        DB::table('penyewas')->delete();
        DB::table('admins')->delete();
        DB::table('kosts')->delete();
    }
}
