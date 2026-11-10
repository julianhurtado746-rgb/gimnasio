<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
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
        return view('miembros.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:miembros',
        ]);

        Miembro::create($request->all());

        return redirect()->route('miembros.index')->with('success', 'Miembro creado');
    }
}
