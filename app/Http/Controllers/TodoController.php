<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $todos=Todo::all();
        $todos=Todo::orderBy('created_at','desc')->get();
        return view('todos.index')->with('todos',$todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'title'=>'required',
            //'body'=>'required',
            //'due'=>'required'
        ];
        $this->validate($request,$rules);
        $todo=new Todo();
        $todo->title=$request->title;
        $todo->body=$request->body;
        $todo->due=$request->due;
        $todo->save();
        return redirect()->back()->with('status','Todo Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo=Todo::findOrFail($id);
        return view('todos.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo=Todo::findOrFail($id);
        return view('todos.edit')->with('todo',$todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $todo=Todo::findOrFail($id);
        $todo->title=$request->title;
        $todo->body=$request->body;
        $todo->due=$request->due;
        $todo->save();
        return redirect()->back()->with('status','Todo Updated !');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo=Todo::findOrFail($id);
        $todo->delete();
        return redirect()->back()->with('status','Todo deleted !');
    }
}
