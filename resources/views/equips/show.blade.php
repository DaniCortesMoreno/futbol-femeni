@extends('layouts.app')
@section('title', "Pàgina equip femení" )
@section('content')
    <x-equip
    :nom="$equip['nom']"
    :estadi="$equip['estadi']"
    :titols="$equip['titols']"
    />
@endsection