@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Jugador</title>
</head>
<body>
    <h1>Formulario de Estadio</h1>
    <form action="{{ route('jugadors.store') }}" method="POST"  id="estadioForm">
        <!-- Token de seguridad (IMPORTANTE)-->
        @csrf 
        <label for="nombre">Nombre</label>
        <input type="text" id="nom" name="nom" placeholder="Nombre del Jugador" required>

        <label for="ciutat">Equipo</label>
        <input type="text" id="equip" name="equip" placeholder="Equipo del jugador" required>

        <label for="capacitat">Posicio</label>
        <input type="text" id="posicio" name="posicio" placeholder="Posicio del jugador"required>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
@endsection
