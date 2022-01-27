<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\Models\Admins;
use App\Models\family;
use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function numbers(){
        return todo::where('number',1)->where('admin_id',Auth::guard('admins')->user()->id)->get();
    }

    public function addnumber(Request $req){
        if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))
        {
        $todo = new todo();
        $todo->text = filter_var($req->number,FILTER_SANITIZE_STRING);
        $todo->admin_id = Auth::guard('admins')->user()->id;
        $todo->number = 1;
        $todo->save();
      }
    }

      public function deletenumber(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            $todo = todo::find($id);
            if($todo->admin_id == Auth::guard('admins')->user()->id){
            todo::find($id)->delete();}
            else{
                return redirect()->back();
            }
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
            if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')){
        $data['costumers'] = family::all();
        $role = 'admin';
        $role = Role::where('name','fs')->orWhere('name','digital')->get();
        $data['admins'] = Admins::role($role)->get();
        return $data;
            }
        }
    }
    public function deletetodo(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            $todo = todo::find($id);
            if($todo->admin_id == Auth::guard('admins')->user()->id){
            todo::find($id)->delete();}
            else{
                return redirect()->back();
            }
        }
    }
    public function donetodo(Request $req){
        if(Auth::guard('admins')->check()){
            $id = (int) $req->id;
            $todo = todo::where('id',$id)->get();
            if($todo->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')){
            $todo->update(['done' => 1]);}
        }
    }
}
