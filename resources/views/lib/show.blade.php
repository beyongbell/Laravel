@extends('layout/main')
@section('content')
<h1>Libary </h1>
<div class="alert alert-primary" role="alert">
    <p>{{ $lib->title }}</p>
    <p>{{ $lib->language }}</p>
    <p>{{ $lib->star }}</p>
    <p>{{ $lib->created_at }}</p>
</div>
@endsection