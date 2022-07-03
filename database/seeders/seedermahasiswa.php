<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mahasiswa;

class seedermahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        for ($i=1; $i <= 8; $i++) { 
            mahasiswa::create([
                'nama' => 'mahasiswa1',
                'nim' => '123456789',
                'tanggal_lahir' => now(),
                'alamat' => 'alamat mahasiswa',
                'no_telpon' => '0813492749',
            ]);
        }
    }
}
