<?php

namespace App\Http\Controllers;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
      $todos = Todo::all();
      return View("index")->with('todos', $todos);
    }

    public function addTodo(Request $req)
    {
      $todo = new Todo;
      $todo->todo_title = $req->todoTitle;
      $todo->todo_content = $req->todoContent;
      $todo-> save();
      return redirect()->back();
    }

    public function deleteTodo($id)
    {
      $todo = Todo::find($id);
      $todo->delete();
      return redirect()->back();
    }

    public function setAsCompleted($id)
    {
      $todo = Todo::find($id);
      $todo->completed = 1;
      $todo->save();
      return redirect()->back();
    }

    public function editeTodo($id)
    {
      $todo = Todo::find($id);
      return view('edite')->with('todo',$todo);
    }

    public function saveTodo(Request $req,$id)
    {
      $todo = Todo::find($id);
      $todo->todo_title = $req->todoTitle;
      $todo->todo_content = $req->todoContent;

      $todo->save();
      return redirect()->route('index');
    }
}
