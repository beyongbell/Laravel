@extends('layout/main')
@section('content')
<h1>Lib Language</h1>
@if(Session::has('message'))
<div class="alert alert-info">
    {{ Session::get('message') }}
</div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Language</th>
            <th>Star</th>
            <th>Create</th>
            <th width="200">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($lib as $rs)
        <tr>
            <td>{{ $rs->id }}</td>
            <td>{{ $rs->title }}</td>
            <td>{{ $rs->language }}</td>
            <td>{{ $rs->star }} </td>
            <td>{{ $rs->created_at }}</td>
            <td>
                {{ Html::link('lib/'.$rs->id ,'View', array('class' => 'btn btn-primary')) }}
                {{ Html::link('lib/'.$rs->id.'/edit','Edit', array('class' => 'btn btn-primary')) }}
                {{ Form::open(['route' => ['lib.destroy' ,$rs->id ]]) }}
                <input type="hidden" name="_method" value="delete">
                {{ Form::submit('Delete' ,array('class'=> 'btn btn-primary')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6">No data! </td>
        </tr>
    @endforelse
    </tbody>
</table>
<div class="row">
    <div class="col-md-5">
        {{ Html::link('lib/create', 'Add New', array('class' => 'btn btn-primary')) }}
    </div>
</div>
@endsection