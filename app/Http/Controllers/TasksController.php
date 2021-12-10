<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Models\notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    public function dnotifications(){
       notification::where('receiver_id',Auth::guard('admins')->user()->id)->where('done',0)->update(['done'=>1]);
    }
    public function searchword(){
        $data =  appointment::orderBy('name','asc')->get();
        return view('costumers',compact('data'));
    }
    public function costumers(Request $request){
        $searchname = $request->searchname;
        $date1 = $request->searchdate1;
        $date2 = $request->searchdate2;
        if($date1 == null && $date2 == null) {
            $data = appointment::where('lname', 'like', '%' . $searchname . '%')
                ->orWhere('name', 'like', '%' . $searchname . '%')->get();
        }else{
            $data = appointment::where('lname', 'like', '%' . $searchname . '%')
                ->orWhere('name', 'like', '%' . $searchname . '%')->whereBetween('created_at',[$date1,$date2])->get();
        }
            return view('costumers', compact('data'));

    }
	 public function documentform(Request $req){
        $data = $req->all();
        $data = json_encode($data);
        $csapp = new appointment();
        $csapp->name = "aslkqlwe";
        $csapp->lead_id = 1;
        $csapp->lname = "qweqwe";
        $csapp->birthday = "1974-12-09";
        $csapp->data = $data;


      $file = $req->file('preinsurer');
      $filename = str_replace($file->guessClientExtension(),'.',$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
     $path = $file->storeAs('img',$filename);

        $csapp->save();
    }

}
