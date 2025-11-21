<?php

namespace App\Http\Controllers;

use App\Models\Postre;
use Illuminate\Http\Request;

class PostreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postres = Postre::orderBy('created_at', 'desc')->paginate(12);
        return view('postres.index', compact('postres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'fecha_creacion' => 'nullable|date',
        ]);

        Postre::create($data);

        return redirect()->route('postres.index')->with('success', 'Postre creado correctamente ✨');
    }

    /**
     * Display the specified resource.
     */
    public function show(Postre $postre)
    {
        return view('postres.show', compact('postre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postre $postre)
    {
        return view('postres.edit', compact('postre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postre $postre)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'fecha_creacion' => 'nullable|date',
        ]);

        $postre->update($data);

        return redirect()->route('postres.index')->with('success', 'Postre actualizado correctamente ✨');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postre $postre)
    {
        $postre->delete();

        return redirect()->route('postres.index')->with('success', 'Postre eliminado correctamente ❌');
    }
}
