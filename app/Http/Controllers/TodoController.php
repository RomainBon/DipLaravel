<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todoModel;

class TodoController extends Controller
{
  public function getTodo()
  {
    return todoModel::all();
  }

  public function postTodo(Request $request)
  {
    $todo = new todoModel;
    $todo->label=$request->label;
    $todo->save();
    return todoModel::find($todo->id);
  }
  public function putTodo(Request $request, todoModel $todo)
  {
    $todo->label=$request->label;
    $todo->isDone=$request->isDone;
    $todo->save();
    return $todo->fresh();
  }
  public function deleteTodo (Request $request, todoModel $todo)
  {

    $todo = todoModel::destroy($todo->id);

  }

}
