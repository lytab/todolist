@extends('layouts.app')
@section('title','details')
@section('content')
<a class="btn btn-default" href="/">Go back</a>
    <h1>
            <a href="{{url()->current()}}">
               {{$todo->title}}
            </a>
       
        </h1>
        <div class="label label-danger">{{$todo->due}}</div>
      <hr>  <p class="lead">{{$todo->body}}</p>
      <br><br>
      <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
      {!!Form::open(['action'=>['TodoController@destroy',$todo->id],'method'=>'PUT','class'=>"pull-right"])!!}
         {{Form::hidden('_method',"DELETE")}} 
        {{Form::bsSubmit('Delete Todo',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}


@endsection