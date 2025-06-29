<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $buku = [
        'judul'=>'Buku Linux Pemula',
        'pengarang'=>'Linus Torvald 2',
        'tahun_terbit'=>'2024',
        'created_at' => now(),
        'updated_at' => now()
        ];
    
    DB::table('buku')->insert($buku);

    }
  
}
