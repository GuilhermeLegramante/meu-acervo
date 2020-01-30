@extends('template')

@section('content')
    {{$nome}}

@if ($nome === $nome2)
    <p>É igual</p>
@else
    <p>É diferente</p>
@endif

@for ($i=0; $i<10; $i++)
    <p>{{$i}}</p>
@endfor

