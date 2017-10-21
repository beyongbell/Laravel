@extends('layout/main')
@section('content')
<h1>Form Language</h1>
@if(isset($lib))
<div class="alert alert-success" role="alert">
   <p class="text-center"> Edit Form </p>
</div>
   {{ Form::open(['method' => 'put' , 'route' => ['lib.update', $lib->id ] ]) }} 
@else
<div class="alert alert-success" role="alert">
  <p class="text-center"> Add Form </p>
</div>
   {{ Form::open(['url' => 'lib']) }}     
@endif
<div class="alert alert-primary" role="alert">
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="form-group">
        <div class="col-xs-2">
            {{ Form::label('title','Title Libary') }}
        </div>
        <div class="col-md-5">
        @if(isset($lib->title))
            {{ Form::text('title',$lib->title,['class' => 'form-control']) }}
        @else
            {{ Form::text('title','',['class' => 'form-control']) }}
        @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-2">
            {{ Form::label('language','Language') }}
        </div>
        <div class="col-md-5">
        @if(isset($lib->language))
            {{ Form::text('language' ,$lib->language, ['class' => 'form-control']) }}
        @else
            {{ Form::text('language','',['class' => 'form-control']) }}
        @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-2">
            {{ Form::label('star','Star') }}
        </div>
        <div class="col-md-5">
        @if(isset($lib->star))
            {{ Form::text('star' ,$lib->star, ['class' => 'form-control']) }}
        @else
            {{ Form::text('star','',['class' => 'form-control']) }}
        @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-5">
            {{ Form::submit('Save' , ['class' => 'btn btn-primary']) }}
        </div>
    </div>
</div>
</div>
@endsection