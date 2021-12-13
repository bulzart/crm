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
        $date1 = date('Y-m-d', strtotime($request->searchdate1));
        $n = date('Y-m-d', strtotime($request->searchdate2));
        $date2 = date('Y-m-d',strtotime($n . "+1 days"));
        if(!isset($request->searchdate1) && !isset($request->searchdate2) && isset($request->searchname)) {
            $data = appointment::where('lname', 'like', '%' . $searchname . '%')
                ->orWhere('name', 'like', '%' . $searchname . '%')->get();
        }elseif(isset($request->searchdate1) && isset($request->searchdate2) && !isset($request->searchname)){
            $data = appointment::whereBetween('created_at',[$date1,$date2])->get();
        }
        else{
           $data = appointment::where('lname', 'like', '%' . $searchname . '%')
           ->orWhere('name', 'like', '%' . $searchname . '%')->whereBetween('created_at',[$date1,$date2])->get();
        }
            return view('costumers', compact('data'));




    public function tasks(){
      $cnt = 0;
   $taskscount = appointment::where('completed',0)->get()->count();
   $tasks = appointment::where('completed',0)->get();
   $costumers = appointment::all();
   $todaydate = Carbon::now()->format('m-d');
  
   $birthdays = [];
   foreach($costumers as $cos){
      if(substr($cos->birthday,5) == $todaydate)
      {
          $birthdays[$cnt]['birthday'] = $cos->birthday;
          $now = (int) Carbon::now()->format('Y');
          $birth = (int) substr($cos->birthday,-10,-6);
          $birthdays[$cnt]['age'] = $now - $birth;
          $birthdays[$cnt]['id'] = $cos->id;
          $birthdays[$cnt]['name'] = ucfirst($cos->name);
          $birthdays[$cnt]['lname'] = ucfirst($cos->lname);
          $cnt++;
      }

   }
  
   return view('tasks',compact('taskscount','tasks','birthdays'));
  }
  

  
	 public function documentform(Request $req){
        $data = $req->all();
     
        $csapp = new appointment();
        $csapp->name = "aslkqlwe";
        $csapp->lead_id = 1;
        $csapp->lname = "qweqwe";
        $csapp->birthday = "1974-12-09";
       



  if($req->file('preinsurer') != null){

  if($req->file('preinsurer') != null){

      $file = $req->file('preinsurer');
      $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
     $path = $file->storeAs('img',$filename);
    $data['preinsurer'] = $path;
    }
     if($req->file('idnecessary') != null){
        $file = $req->file('idnecessary');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['idnecessary'] = $path;
     }
     if($req->file('noticeby') != null){
        $file = $req->file('noticeby');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['noticeby'] = $path;
     }
     if($req->file('powerofattorney') != null){
        $file = $req->file('powerofattorney');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['powerofattorney'] = $path;
     }
     if($req->file('uploadpolice') != null){
        $file = $req->file('uploadpolice');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice'] = $path;
     }
     if($req->file('uploadvehicleid') != null){
        $file = $req->file('uploadvehicleid');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice'] = $path;
     }
     if($req->file('uploadpolice2') != null){
        $file = $req->file('uploadpolice2');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice2'] = $path;
     }

    $data['phone'] = $data['countryCode'] . $data['phonenumber'];
     unset($data['countryCode'],$data['phonenumber']);
     dd($data);
     

        $csapp->save();
    }




      

    public function ispending($object):bool{
      if($object['job'] != null && $object['email'] != null) return true;
      if($object['email'] != null) return true;
      if($object['kanton'] != null && $object['kanton'] != '') return true;
      if($object['lenker'] != null && $object['lenker'] != '') return true;
      if($object['comment'] != null && $object['comment'] != '') return true;
   }

}



