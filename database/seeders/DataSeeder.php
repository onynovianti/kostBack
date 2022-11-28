<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('kosts')->insert(
            [
              'nama' => $faker->word,
              'alamat' => 'Jl. Kusuma',
              'kecamatan' => '3507010',
              'kota' => '3507',
              'provinsi' => '35'
        ]
    );
    }
}
