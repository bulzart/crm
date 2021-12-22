<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function numbers(){
        return todo::where('number',1)->where('admin_id',Auth::guard('admins')->user()->id)->get();
    }

    public function addnumber(Request $req){
        $todo = new todo();
        $todo->text = filter_var($req->number,FILTER_SANITIZE_STRING);
        $todo->admin_id = Auth::guard('admins')->user()->id;
        $todo->number = 1;
        $todo->save();
      }

      public function deletenumber(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            todo::find($id)->delete();
        }
    }

    public function addtodo(Request $req){
      $todo = new todo();
      $todo->text = filter_var($req->todo,FILTER_SANITIZE_STRING);
      $todo->admin_id = Auth::guard('admins')->user()->id;
      $todo->save();
      return redirect()->route('dashboard');
    }
    public function todos(){
        if(Auth::guard('admins')->check()){
         return $todos = todo::where('admin_id',Auth::guard('admins')->user()->id)->where('number',0)->orderBy('created_at','desc')->get();
        }
    }
    public function deletetodo(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            todo::find($id)->delete();
        }
    }
    public function donetodo(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            todo::where('id',$id)->update(['done' => 1]);
        }
    }
}
