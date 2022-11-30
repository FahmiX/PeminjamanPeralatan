<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PetugasPeralatan;

class DummyPetugasPeralatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetugasPeralatan::create([
            'nama' => 'Petugas Peralatan',
            'username' => 'petugas_peralatan',
            'password' => bcrypt('petugas_peralatan'),
        ]);
    }
}
