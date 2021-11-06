<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::orderBy('completed')->get();

        return view('todo.index', [
            "todos" => $todos,
        ]);
    }

    public function create()
    {
        return view('todo.create');
    }

    public  function store(Request $request)
    {
        //validate
        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        //store todo in database
        Todo::create([
            'title' => $request->title
        ]);

        return  back()->with('success', 'todod created successfuly!');
    }


    public function update(Request $request)
    {
        //validate
        $this->validate($request, [
            'title' => 'required|max:255'
        ]);

        $todo = Todo::find($request->id);

        //store todo in database
        $todo->update([
            'title' => $request->title
        ]);

        return  redirect()->back()->with('success', 'todo updated successfuly!');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todo.edit', [
            'todo' => $todo,
            'id' => $id
        ]);
    }

    public function completed($id)
    {
        $todo = Todo::find($id);

        if ($todo->completed) {
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', 'todo incompleted!');
        } else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', 'todo completed!');
        }
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', 'todo deleted!');
    }
}
