<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoitem =  Todo::orderBy('priority', 'desc')->get();
        return view ('todos.index')->with('todoitem', $todoitem);
    }


    /**
     * Display a listing history.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $todoitem =  Todo::orderBy('updated_at', 'desc')->get();
        return view ('todos.history')->with('todoitem', $todoitem);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'priority' => 'required',
            'deadline' => 'required'
            
        ]);

        //Create Item
        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->priority = $request->input('priority');
        $todo->deadline = $request->input('deadline');
        $todo->user_who_added = auth()->user()->id;
        $todo->save();

        return redirect('/todo')->with('success', 'Uzdevums pievienots');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function toggleBool($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->status = !$todo->status;
        $todo->save();
        return redirect('/todo')->with('success', 'Uzdevums izpildits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
