<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Todo;
use Carbon\Carbon;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = Carbon::now()->subDay(); 
        $todoitem =  Todo::orderBy('created_at', 'desc')->get();
        return view('home')->with('posts')->with('todoitem', $todoitem)->with('time', $time);
    }
}
