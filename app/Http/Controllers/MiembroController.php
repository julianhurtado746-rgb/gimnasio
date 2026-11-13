<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use App\Models\Plan;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index()
    {
        $miembros = Miembro::with('plan')->get();
        return view('miembros.index', compact('miembros'));
    }

    public function create()
    {
        $planes = Plan::all();
        return view('miembros.create', compact('planes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:miembros',
            'plan_id' => 'required|exists:planes,id',
        ]);

        Miembro::create($request->all());

        return redirect()->route('miembros.index')->with('success', 'Miembro creado');
    }

    public function edit(Miembro $miembro)
    {
        $planes = Plan::all();
        return view('miembros.edit', compact('miembro', 'planes'));
    }

    public function update(Request $request, Miembro $miembro)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:miembros,cedula,' . $miembro->id,
            'plan_id' => 'required|exists:planes,id',
        ]);

        $miembro->update($request->all());

        return redirect()->route('miembros.index')->with('success', 'Miembro actualizado');
    }

    public function destroy(Miembro $miembro)
    {
        $miembro->delete();
        return redirect()->route('miembros.index')->with('success', 'Miembro eliminado');
    }
}