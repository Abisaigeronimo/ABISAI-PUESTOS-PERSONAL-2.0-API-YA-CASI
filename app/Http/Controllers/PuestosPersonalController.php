<?php

namespace App\Http\Controllers;

use App\Models\PuestosPersonal;
use Illuminate\Http\Request;

class PuestosPersonalController extends Controller
{
    
    public function index()
    {
        $puestospersonal = PuestosPersonal::all();
        return view('puestospersonal.index', compact('puestospersonal'));
    }

    
    public function create()
    {
        return view('puestospersonal.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'rfc' => 'required|string|max:13|unique:puestos_personal,rfc',
            'clave_puesto' => 'required|integer',
            'horas_asignadas' => 'nullable|integer',
            'fecha_ingreso_puesto' => 'required|date',
            'fecha_termino_puesto' => 'nullable|date',
            'fecha_de_ratificacion_puesto' => 'nullable|date',
        ]);

        PuestosPersonal::create($request->all());
        return redirect()->route('puestospersonal.index')->with('success', 'Puesto personal creado exitosamente.');
    }

    
    public function show($rfc)
    {
        $puesto = PuestosPersonal::findOrFail($rfc);
        return view('puestospersonal.show', compact('puesto'));
    }

    
    public function edit($rfc)
    {
        $puesto = PuestosPersonal::findOrFail($rfc);
        return view('puestospersonal.edit', compact('puesto'));
    }

    
    public function update(Request $request, $rfc)
    {
        $request->validate([
            'clave_puesto' => 'required|integer',
            'horas_asignadas' => 'nullable|integer',
            'fecha_ingreso_puesto' => 'required|date',
            'fecha_termino_puesto' => 'nullable|date',
            'fecha_de_ratificacion_puesto' => 'nullable|date',
        ]);

        $puesto = PuestosPersonal::findOrFail($rfc);
        $puesto->update($request->all());
        return redirect()->route('puestospersonal.index')->with('success', 'Puesto personal actualizado exitosamente.');
    }

    
    public function destroy($rfc)
    {
        $puesto = PuestosPersonal::findOrFail($rfc);
        $puesto->delete();
        return redirect()->route('puestospersonal.index')->with('success', 'Puesto personal eliminado exitosamente.');
    }
}