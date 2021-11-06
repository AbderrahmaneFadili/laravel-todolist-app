<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('todo.index');
    }

    public function create()
    {
        return view('todo.create');
    }

    public  function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'title' => 'required'
        ]);

        //store todo in database
        Todo::create([
            'title' => $request->title
        ]);

        return  back()->with('success', 'todod created successfuly!');
    }

    public function edit()
    {
        return view('todo.edit');
    }
}
