@extends('layouts.app')
@section('title','create')
@section('content')
    {!!Form::open(['action'=>'TodoController@store','method'=>'POST'])!!}
    
        {{Form::bsText('title')}}
        {{Form::bsTextArea('body')}}
        {{Form::bsText('due')}}
        {{Form::bsSubmit('Create Todo')}}
    {!!Form::close()!!}

@endsection