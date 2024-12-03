@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'Equips</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Equip</th>
        <th class="border border-gray-300 p-2">Posicio</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jugadors as $key => $jugador)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('jugadors.show', $key) }}" class="text-blue-700 hover:underline">{{ $jugador['nom'] }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $jugador['equip'] }}</td>
        <td class="border border-gray-300 p-2">{{ $jugador['posicio'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>


<div>
    <br>
    <a href="{{ route('jugadors.create') }}" class="text-blue-700 hover:underline">CREAR JUGADOR</a>
</div>
@endsection