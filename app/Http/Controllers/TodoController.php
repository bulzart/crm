<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function addtodo(Request $req){
      $todo = new todo();
      $todo->text = filter_var($req->todo,FILTER_SANITIZE_STRING);
      $todo->admin_id = Auth::guard('admins')->user()->id;
      $todo->save();
      return redirect()->route('dashboard');
    }
}
