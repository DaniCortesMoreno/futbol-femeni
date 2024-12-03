@extends('layouts.app')
@section('title', "Pàgina estadi femení" )
@section('content')
    <x-estadi
    :nom="$estadi['nom']"
    :ciutat="$estadi['ciutat']"
    :capacitat="$estadi['capacitat']"
    :equip_principal="$estadi['equipPrincipal']"
    />
@endsection