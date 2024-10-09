<?php

namespace App\Http\Controllers;

use App\Models\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    public function index()
    {
        return Transaccion::with('tipoTransaccion')->get(); // Lista todas las transacciones
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'descripcion' => 'nullable|string',
            'tipo_transaccion_id' => 'required|exists:tipo_transaccions,id',
            'date'=> 'required'

        ]);

        return Transaccion::create($validatedData);
    }

    public function show($id)
    {
        return Transaccion::with('tipoTransaccion')->findOrFail($id); // Muestra una transacción
    }

    public function update(Request $request, $id)
    {
        $transaccion = Transaccion::findOrFail($id);

        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'descripcion' => 'required|string',
            'date' => 'required|date',
            
            'tipo_transaccion_id' => 'required|exists:tipo_transaccions,id',

        ]);

        $transaccion->update($validatedData);
        return $transaccion;
    }

    public function destroy($id)
    {
        Transaccion::findOrFail($id)->delete(); 
        return response()->noContent();
    }
}
