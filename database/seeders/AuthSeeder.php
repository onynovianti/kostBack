<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('penyewas')->insert(
            [ // PENYEWA
            'nama' => 'Narendra Saputra',
            'username' => 'narendra',
            'password' => bcrypt('1234567890'),
            'email' => 'narenn@gmail.com',
            'noHp' => '081333717238',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
        );
        DB::table('pemiliks')->insert(
            [ // PEMILIK
            'nama' => 'Nanda Setiawan',
            'username' => 'setiawananda',
            'password' => bcrypt('1234567890'),
            'email' => 'nandaset@gmail.com',
            'noHp' => '088765647382',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
        );
        DB::table('admins')->insert(
            [ // ADMINISTRATOR
            'nama' => 'Dicky Wijayahadi',
            'username' => 'dickyyy',
            'password' => bcrypt('1234567890'),
            'email' => 'dickyy@gmail.com',
            'noHp' => '085172647382',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ],
        );
    }
}
