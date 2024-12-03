@extends('layouts.app')
@section('title', "Pàgina estadi femení" )
@section('content')
    <x-jugador
    :nom="$jugador['nom']"
    :equip="$jugador['equip']"
    :posicio="$jugador['posicio']"
    />
@endsection