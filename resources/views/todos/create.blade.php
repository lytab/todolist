@extends('layouts.app')
@section('title','create')
@section('content')
<h1>Create Todo</h1>

    {!!Form::open(['action'=>'TodoController@store','method'=>'POST'])!!}
    
        {{Form::bsText('title')}}
        {{Form::bsTextArea('body')}}
        {{Form::bsText('due')}}
        {{Form::bsSubmit('Create Todo',['class'=>'btn btn-danger'])}}

    {!!Form::close()!!}

@endsection