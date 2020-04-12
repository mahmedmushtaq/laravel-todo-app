<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    //
    public function index(){
        return view("todos.index")->with("todos",Todo::all());
    }

    public function show(Todo $todo){
         return view("todos.show")->with("todo",$todo);
    }

    public function create(){
        return view("todos.create");
    }

    public function store(){

        $this->validate(request(),[
            'name'=>'required|min:6|max:24',
            'description'=>"required"
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();


        session()->flash("success","Todo Created Successfully");

        return redirect("/todos");
    }

    public function edit(Todo $todo){
        return view("todos.edit")->with("todo",$todo);
    }

    public function update(Todo $todo){

        $this->validate(request(),[
            'name'=>'required|min:6|max:24',
            'description'=>"required"
        ]);

    
        $data = request()->all();
        $todo->name= $data['name'];//this called class memeber
        $todo->description = $data['description']; // class memeber is called
        $todo->save();

        session()->flash("success","Todo updated Successfully");
       



        return redirect("/todos");


    }

    public function delete(Todo $todo){
       
        $todo->delete();
        session()->flash("success","Todo deleted Successfully");
        return redirect("/todos");
    }

    public function completed(Todo $todo){
        $todo->completed =true;
        $todo->save();
        session()->flash("success","Yahoo! You have completed your todo");
        return redirect("/todos");
    }
}
