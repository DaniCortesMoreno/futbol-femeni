@extends('layouts.app')

@section('title', "Guia d'DEPLOYMENTS")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'DEPLOYMENTS</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">DEPLOYMENTS</th>
        <th class="border border-gray-300 p-2">DEPLOYMENTS</th>
        <th class="border border-gray-300 p-2">DEPLOYMENTS</th>
    </tr>
    </thead>
    <tbody>
    @foreach($equips as $key => $equip)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('equips.show', $key) }}" class="text-blue-700 hover:underline">{{ $equip['nom'] }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $equip['estadi'] }}</td>
        <td class="border border-gray-300 p-2">{{ $equip['titols'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>

@endsection