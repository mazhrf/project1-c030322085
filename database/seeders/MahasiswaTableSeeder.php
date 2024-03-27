<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Mahasiswa::create([
            'name' => Str::random(20),
            'email' => Str::random(20),
            'password' => bcrypt('secret')
        ]);
    }
}
