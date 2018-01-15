<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PagesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index(){
        $title = 'Sveicināts ToDoList';
        return view('pages.index', compact('title'));
    }

    public function todo(){
        $title = 'To-Do';
        return view('pages.todo', compact('title'));
    }

    public function services(){
        $title = 'Services';
        return view('pages.services', compact('title'));
    }


}
