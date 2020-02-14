<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){

        return view('todos.index') -> with('todos', Todo::all());
    }

    public function show(Todo $todo){

        // dd($todoId);
        // die(var_dump($todoId));
        return view('todos.show')->with('todo', $todo);

    }

    public function create(){

        return view('todos.create');
    }

    public function store(){
        // dd(request()->all());

        $this->validate(request(), [
            'name' => 'required|min:6|max:18',
            'description' => 'required',
        ]);


        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success', 'Todo created success');

        return redirect('/todos');
    }


    public function edit(Todo $todo){
        // $todo = Todo::find($todoId);

        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(),[
            'name' => 'required|min:6|max:32',
            'description' => 'required',
        ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        \session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');
    }

    public function delete(Todo $todo)
    {
        # code...
        $todo->delete();

        \session()->flash('success', 'Todo deleted successfully');

        return redirect('/todos');
    }

    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();
        \session()->flash('success', 'Todo completed successfully');
        return \redirect('/todos');
    }
}
