@extends('layouts.app')
@section('title', "Pàgina estadi femení" )
@section('content')

    <x-partit
    :local="$partit['local']"
    :visitant="$partit['visitant']"
    :date="$partit['date']"
    :resultat="$partit['resultat']"
    />
@endsection