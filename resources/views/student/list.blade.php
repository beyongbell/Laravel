@extends('layout/main')

@section('title', "List")

@section('content')

<h2> {{$name}} </h2>
<h2> {!!$surname!!} </h2>

@php
echo rand(1,20);
@endphp

@endsection



{{--  @if($name == "Tinnakorn")
<h2>Bellnaja</h2>
@else
<h2>........</h2>
@endif

@for($i=0; $i <= 10; $i++)
{{$i}}
@endfor

{{isset($name) ? $name : "ON NaJa"}}

{{$name or "No Defult"}}  --}}