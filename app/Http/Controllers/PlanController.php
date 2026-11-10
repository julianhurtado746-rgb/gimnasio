<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::all();
        return view('planes.index', compact('planes'));
    }

    public function create()
    {
        return view('planes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'duracion_mes' => 'required|integer|min:1',
        ]);

        Plan::create($request->all());
        return redirect()->route('planes.index')->with('success', 'Plan creado');
    }

    public function edit(Plan $plan)
    {
        return view('planes.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'descripcion' => 'nullable|string',
            'duracion_mes' => 'required|integer|min:1',
        ]);

        $plan->update($request->all());
        return redirect()->route('planes.index')->with('success', 'Plan actualizado');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('planes.index')->with('success', 'Plan eliminado');
    }
}