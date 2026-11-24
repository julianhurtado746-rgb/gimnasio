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

    Plan::create([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'descripcion' => $request->descripcion,
        'duracion_mes' => $request->duracion_mes,
    ]);

    return redirect()->route('planes.index')->with('success', 'Plan creado correctamente');
}
    public function show($id)
    {
        $plan = Plan::findOrFail($id);
        return view('planes.show', compact('plan'));
    }

    public function edit($id)
    {
        $plan = Plan::findOrFail($id);
        return view('planes.edit', compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
            'duracion_mes' => 'required|integer|min:1',
        ]);

        $plan = Plan::findOrFail($id);

        $plan->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'duracion_mes' => $request->duracion,
        ]);

        return redirect()->route('planes.index')->with('success', 'Plan actualizado correctamente');
    }

    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();

        return redirect()->route('planes.index')->with('success', 'Plan eliminado correctamente');
    }
}