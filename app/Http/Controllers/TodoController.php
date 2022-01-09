<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\Models\Admins;
use App\Models\family;
use Illuminate\Http\Request;
use App\Models\todo;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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

    public function addtodo(ToDoRequest $req){
      $todo = new todo();
      $todo->text = filter_var($req->todo,FILTER_SANITIZE_STRING);
      $todo->admin_id = Auth::guard('admins')->user()->id;
      $todo->save();
      return redirect()->route('dashboard');
    }
    public function todos(){
        if(Auth::guard('admins')->check()){
        $data['costumers'] = family::where('status','Submited')->get();
        $role = 'admin';
        $role = Role::where('name','backoffice')->get();
        $data['admins'] = Admins::role($role)->get();
        return $data;
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
