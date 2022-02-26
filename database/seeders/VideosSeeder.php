<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'class' => 'Programacion para Internet',
            'theme' => 'CRUD Basico Laravel',
            'duration' => '5 horas',
            'size' => '1.5 GB',
            'broadcast_date' => now()
        ]);
    }
}
