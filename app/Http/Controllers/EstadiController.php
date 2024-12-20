<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadiController extends Controller
{

    protected $estadis = [
        [
        'nom' => 'Estadi Johan Cruyff',
        'ciutat' => 'Sant Joan Despí',
        'capacitat' => 6000,
        'equipPrincipal' => 'FC Barcelona Femení'
        ],
        [
        'nom' => 'Centro Deportivo Wanda Alcalá de Henares',
        'ciutat' => 'Alcalá de Henares',
        'capacitat' => 2800,
        'equipPrincipal' => 'Atlètic de Madrid Femení'
        ],
        [
        'nom' => 'Estadio Alfredo Di Stéfano',
        'ciutat' => 'Madrid',
        'capacitat' => 6000,
        'equipPrincipal' => 'Real Madrid Femení'
        ]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadis = $this->estadis;
        return view('estadis.index', compact('estadis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estadis.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newEstadi = [
            'nom' => $request->input('nom'),
            'ciutat' => $request->input('ciutat'),
            'capacitat' => $request->input('capacitat'),
            'equipPrincipal' => "Alguno"
        ];
        $this->estadis[] = $newEstadi;

        $estadis = $this->estadis;

        return view('estadis.index', compact('estadis'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estadi = $this->estadis[$id];
        return view('estadis.show', compact('estadi'));
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
