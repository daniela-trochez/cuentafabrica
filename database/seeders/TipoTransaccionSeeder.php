<?php

namespace Database\Seeders;

use App\Models\TipoTransaccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoTransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoTransaccion::create(['name' => 'Ingreso']);
        TipoTransaccion::create(['name' => 'Egreso']);
    }
}
