<?php

namespace Database\Seeders;

use App\Models\TipoTransaccion;
use App\Models\Transaccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $ingreso = TipoTransaccion::where('name', 'Ingreso')->first();
        $egreso = TipoTransaccion::where('name', 'Egreso')->first();

      
        Transaccion::create([
            'amount' => 1500.00,
            'descripcion' => 'Salario mensual',
            'tipo_transaccion_id' => $ingreso->id,
            'date' => now()
        ]);

        Transaccion::create([
            'amount' => 200.00,
            'descripcion' => 'Compra de comestibles',
            'tipo_transaccion_id' => $egreso->id,
            'date' => now()
        ]);

        Transaccion::create([
            'amount' => 300.00,
            'descripcion' => 'Pago de servicios públicos',
            'tipo_transaccion_id' => $egreso->id,
            'date' => now()
        ]);
    }
    
}
