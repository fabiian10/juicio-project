<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demandado;
use Carbon\Carbon;

class DemandadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $demandados = [
            ['nombre' => 'TITULAR DE LA SECRETARÍA DE SEGURIDAD PÚBLICA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'COMISIÓN DE HONOR Y JUSTICIA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'DELEGACIÓN ADMINISTRATIVA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'COORDINACIÓN DEL AGRUPAMIENTO DE SEGURIDAD VIAL', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SUBSECRETARÍA DE INFORMACIÓN, INTELIGENCIA Y CONTRAINTELIGENCIA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'DIRECCIÓN DE JUSTICIA CÍVICA Y MEDIACIÓN ADMINISTRATIVA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'COORDINACIÓN DE AGRUPAMIENTOS', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SUBSECRETARÍA DE DE OPERACIÓN POLICIAL', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SUBSECRETARÍA DE INVESTIGACIÓN ESPECIALIZADA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SUBSECRETARÍA DE DESARROLLO POLICIAL Y SEGURIDAD PRIVADA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'UNIDAD DE ASUNTOS JURÍDICOS Y DERECHOS HUMANOS', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'UNIDAD DE ASUNTOS INTERNOS', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'DIRECCIÓN DE CONTROL DE LA LICENCIA OFICIAL COLECTIVA', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SECRETARÍA DE FINANZAS Y ADMINISTRACIÓN', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'COORDINACIÓN DE COMISARÍAS REGIONALES', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'ENLACE DE COMUNICACIÓN SOCIAL', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'C5i', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'ENLACE ADMINISTRATIVO PARA LA SUBSECRETARÍA PARA LA SUBSECRETARÍA DE OPERACIÓN POLICIAL', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['nombre' => 'SUBDIRECCIÓN DE RECURSO HUMANOS', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],

        ];

        Demandado::insert($demandados);
    }
}
