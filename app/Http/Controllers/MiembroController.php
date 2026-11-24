<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use App\Models\Plan;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
    public function index()
    {
        $miembros = Miembro::all();
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
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'plan_id' => 'required|exists:planes,id',
        ]);

        Miembro::create($request->all());

        return redirect()->route('miembros.index')->with('success', 'Miembro creado correctamente');
    }

    public function edit($id)
    {
        $miembro = Miembro::findOrFail($id);
        $planes = Plan::all();
        return view('miembros.edit', compact('miembro', 'planes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string',
            'plan_id' => 'required|exists:planes,id',
        ]);

        $miembro = Miembro::findOrFail($id);

        $miembro->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'plan_id' => $request->plan_id,
        ]);

        return redirect()->route('miembros.index')->with('success', 'Miembro actualizado correctamente');
    }

    public function destroy($id)
    {
        $miembro = Miembro::findOrFail($id);
        $miembro->delete();

        return redirect()->route('miembros.index')->with('success', 'Miembro eliminado correctamente');
    }
}