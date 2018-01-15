<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $title = 'Welcome To Laravel';
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
