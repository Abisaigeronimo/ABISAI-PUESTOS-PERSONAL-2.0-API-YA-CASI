<?php

namespace App\Http\Controllers;

use App\Models\PuestosPersonal;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ApiPuestosPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puestospersonal = PuestosPersonal::all();
        return response()->json($puestospersonal);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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

        $puestospersonal = PuestosPersonal::create($request->all());
        return response()->json($puestospersonal, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $puestospersonal = PuestosPersonal::findOrFail($id);
            return response()->json($puestospersonal);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Puesto personal no encontrado'], 404);
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PuestosPersonal $puestosPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PuestosPersonal $puestosPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PuestosPersonal $puestospersonal)
    {
        $puestospersonal->delete();

        return response()->json(['message' => 'Puesto personal eliminado con éxito'], 200);
    }
}
