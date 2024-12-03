<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadorsController extends Controller
{
    protected $jugadors = [
        ['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'Migcampista'],
        ['nom' => 'Esther González', 'equip' => 'Atlètic de Madrid', 'posicio' => 'Davantera'],
        ['nom' => 'Misa Rodríguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera'],
    ];
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadors = $this->jugadors;
        return view('jugadors.index', compact('jugadors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jugadors.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newJugador = [
            'nom' => $request->input('nom'),
            'equip' => $request->input('equip'),
            'posicio' => $request->input('posicio')
        ];
        $this->jugadors[] = $newJugador;

        $jugadors = $this->jugadors;

        return view('jugadors.index', compact('jugadors'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jugador = $this->jugadors[$id];
        return view('jugadors.show', compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
