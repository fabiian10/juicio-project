<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Juzgado;

class JuzgadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $juzgados = [
            ['nombre' => 'PRIMERO ADMINISTRATIVO', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SEGUNDO ADMINISTRATIVO', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'TERCERO ADMIMISTRATIVO', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'JUZGADO  ADMINISTRATIVO URUAPAN', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'PRIMERA SALA ADMINISTRATIVA ORDINARIA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SEGUNDA SALA ADMINISTRATIVA ORDINARIA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'TERCERO SALA ADMIMISTRATIVO ORDINARIA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

        ];

        Juzgado::insert($juzgados);
    }
}
