@extends('layouts.app')
@section('title','home')
    

@section('content')
<h1>Todos</h1>
@if (count($todos)>0)


    @foreach ($todos as $todo)
     <div class="well">
         <h3>{{$todo->title}}
        
                <span class="label label-danger">{{$todo->due}}</span>
        </h3>
     </div>
    @endforeach

@endif
@endsection