<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sedes = ['centro para el desarrollo agroecologico y agroinduestrial',
        'centro nacional colombo aleman',
        'centro industrial y de aviacion',
        'centro comercio y servicios'];

        foreach ($sedes as $sede){
            DB::table('sedes')->insert(['nombre'=> $sede]);
        }
    }
}
