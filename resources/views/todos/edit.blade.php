@extends('layouts.app')
@section('title','edit')
@section('content')
<a class="btn btn-default" href="/todo/{{$todo->id}}">
    Go back
 </a>
<h1>Edit Todo</h1>

    {!!Form::model($todo,['action'=>['TodoController@update',$todo->id],'method'=>'PATCH'])!!}
    
        {{Form::bsText('title',$todo->title)}}
        {{Form::bsTextArea('body',$todo->body)}}
        {{Form::bsText('due',$todo->due)}}
        {{-- {{Form::hidden('_method','PUT')}} --}}
        {{Form::bsSubmit('Edit Todo')}}
    {!!Form::close()!!}

@endsection