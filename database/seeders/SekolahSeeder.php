<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;


class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sekolahs = [
            [
                'nama' => 'SMA Negeri 1 Jakarta',
                'alamat' => 'Jl. Budi Utomo No. 7, Jakarta Pusat',
            ],
            [
                'nama' => 'SMA Negeri 2 Bandung',
                'alamat' => 'Jl. Cihampelas No. 173, Bandung',
            ],
            [
                'nama' => 'SMA Negeri 3 Surabaya',
                'alamat' => 'Jl. Pemuda No. 33, Surabaya',
            ],
            [
                'nama' => 'SMA Negeri 4 Yogyakarta',
                'alamat' => 'Jl. Malioboro No. 45, Yogyakarta',
            ],
            [
                'nama' => 'SMA Negeri 5 Medan',
                'alamat' => 'Jl. Gatot Subroto No. 12, Medan',
            ],
            [
                'nama' => 'SMA Negeri 6 Semarang',
                'alamat' => 'Jl. Pahlawan No. 88, Semarang',
            ],
            [
                'nama' => 'SMA Negeri 7 Makassar',
                'alamat' => 'Jl. Andi Pangerang No. 20, Makassar',
            ],
            [
                'nama' => 'SMA Negeri 8 Palembang',
                'alamat' => 'Jl. Jenderal Sudirman No. 50, Palembang',
            ],
            
        ];

        foreach ($sekolahs as $sekolah) {
            Sekolah::create($sekolah);
        }
    }
}
