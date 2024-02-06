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
        $sedes = ['Centro para el desarrollo AgroEcologico y AgroInduestrial',
        'Centro Nacional Colombo Aleman',
        'Centro Industrial y de Aviacion',
        'Centro Comercio y Servicios'];

        foreach ($sedes as $sede){
            DB::table('sedes')->insert(['nombre'=> $sede]);
        }
    }
}
