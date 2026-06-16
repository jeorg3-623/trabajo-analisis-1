<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Facturas;

class FacturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('facturas')->insert([
            [
                'cliente_id' => 1,
                'provincia_id' => 1,
                'monto_total' => 100.50,
                'fecha_emision' => '2026-06-01',
                'fecha_vencimiento' => '2026-06-30',
                'estado' => 'pendiente',
            ],
            [
                'cliente_id' => 2,
                'provincia_id' => 2,
                'monto_total' => 200.75,
                'fecha_emision' => '2026-06-05',
                'fecha_vencimiento' => '2026-07-05',
                'estado' => 'pagada',
            ],
            // Agrega más facturas según sea necesario
        ]);
    }
}
