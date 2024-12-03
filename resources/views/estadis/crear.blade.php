@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Estadio</title>
</head>
<body>
    <h1>Formulario de Estadio</h1>
    <form action="{{ route('estadis.store') }}" method="POST"  id="estadioForm">
        <!-- Token de seguridad (IMPORTANTE)-->
        @csrf 
        <label for="nombre">Nombre</label>
        <input type="text" id="nom" name="nom" placeholder="Nombre del estadio" required>

        <label for="ciutat">Ciudad</label>
        <input type="text" id="ciutat" name="ciutat" placeholder="Ciudad del estadio" required>

        <label for="capacitat">Capacidad</label>
        <input type="number" id="capacitat" name="capacitat" placeholder="Capacidad del estadio" min="0" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
@endsection
