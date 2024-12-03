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
    <form action="{{ route('partits.store') }}" method="POST"  id="estadioForm">
        <!-- Token de seguridad (IMPORTANTE)-->
        @csrf 
        <label for="local">local</label>
        <input type="text" id="local" name="local" placeholder="Nombre del local" required>

        <label for="visitant">visitant</label>
        <input type="text" id="visitant" name="visitant" placeholder="Nombre del visitant" required>

        <label for="Date">Date</label>
        <input type="date" id="date" name="date" placeholder="date" required>

        <label for="resultat">resultat</label>
        <input type="text" id="resultat" name="resultat" placeholder="Resultat" required>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>
@endsection
