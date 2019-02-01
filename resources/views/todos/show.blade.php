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
        <p>{{$todo->body}}</p>
@endsection