<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GandusariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gandusaris')->insert([
            'nama' => 'Kelapa Sawit',
            'asal' => 'Kalimantan',
            'deskripsi' => 'Penghasil Minyak',
            'jumlah' => '43',
        ]);
    }
}
