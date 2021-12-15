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
    public function costumers(Request $request)
    {
        $searchname = $request->searchname;
        $date1 = date('Y-m-d', strtotime($request->searchdate1));
        $n = date('Y-m-d', strtotime($request->searchdate2));
        $date2 = date('Y-m-d', strtotime($n . "+1 days"));
        if (!isset($request->searchdate1) && !isset($request->searchdate2) && isset($request->searchname)) {
            $data = appointment::where('lname', 'like', '%' . $searchname . '%')
                ->orWhere('name', 'like', '%' . $searchname . '%')->get();
        } elseif (isset($request->searchdate1) && isset($request->searchdate2) && !isset($request->searchname)) {
            $data = appointment::whereBetween('created_at', [$date1, $date2])->get();
        } else {
            $data = appointment::where('lname', 'like', '%' . $searchname . '%')
                ->orWhere('name', 'like', '%' . $searchname . '%')->whereBetween('created_at', [$date1, $date2])->get();
        }
        return view('costumers', compact('data'));
    }

      }


    public function tasks(){
      $cnt = 0;
      $cnt1 = 0;
   $tasks = appointment::where('completed',0)->get();
 $realopen = [];
 $pending = [];
 $opencnt = 0;
 $pendingcnt = 0;
   foreach($tasks as $task){
   if(!$this->isdone($task)){
     $pending[$cnt] = $task;
     $cnt++;
     $pendingcnt++;
   }
   if($task->data == null){
     $realopen[$cnt1] = $task;
     $cnt1++;
     $opencnt++;
   }
  }


   $cnt = 0;
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

  
   return view('tasks',compact('opencnt','pendingcnt','realopen','pending','birthdays'));



	 public function documentform(Request $req){
        $data = $req->all();

        $csapp = new appointment();
        $csapp->name = "aslkqlwe";
        $csapp->lead_id = 1;
        $csapp->lname = "qweqwe";
        $csapp->birthday = "1974-12-09";




  if($req->file('preinsurer') != null){
=======
  
	 public function documentform(Request $req,$id){
         $req->validate([
           'id' => 'exists:csapp,id'
         ]);
        $data = $req->all();
        $csapp = appointment::find($id);
  if(null !== $req->file('preinsurer')){
      $data1 = $data['preinsurer'];
      $file = $req->file('preinsurer');


      $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
      $path = $file->storeAs('img',$filename);
      $data['preinsurer'] = filter_var($path,FILTER_SANITIZE_STRING);
    }else{
     //return (array) json_decode($csapp->data);
     $preins = (array) json_decode($csapp->data);
      $data['preinsurer'] = $preins['preinsurer'];
    


      $filename = str_replace($file->guessClientExtension(),'.',$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
      $path = $file->storeAs('img',$filename);

      $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . '.' . $file->getClientOriginalExtension();
     $path = $file->storeAs('img',$filename);
    $data['preinsurer'] = $path;
    }
     if($req->file('idnecessary') != null){
        $file = $req->file('idnecessary');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['idnecessary'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('noticeby') != null){
        $file = $req->file('noticeby');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['noticeby'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('powerofattorney') != null){
        $file = $req->file('powerofattorney');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['powerofattorney'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('uploadpolice') != null){
        $file = $req->file('uploadpolice');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('uploadvehicleid') != null){
        $file = $req->file('uploadvehicleid');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) .  '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice'] = filter_var($path,FILTER_SANITIZE_STRING);
     }
     if($req->file('uploadpolice2') != null){
        $file = $req->file('uploadpolice2');
        $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) . '.' . $file->getClientOriginalExtension();
       $path = $file->storeAs('img',$filename);
       $data['uploadpolice2'] = filter_var($path,FILTER_SANITIZE_STRING);
     }

    $data['phone'] = $data['countryCode'] . $data['phonenumber'];
     unset($data['countryCode'],$data['phonenumber']);

     dd($data);





     $csapp->data = json_encode($data);

        $csapp->save();
    }}


        $csapp->save();
    

  }



    public function isdone($object):bool{

      if($object['job'] != null && $object['email'] != null && $object['lenker'] != null && $object['lenker'] != '' && $object['comment'] != null && $object['comment'] != '' && $object['kmstand'] != null && $object['kmstand'] != "" && $object['society'] != null && $object['socity'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['insurance'] != null && $object['insurance'] != '' && $object['carcomment'] != null && $object['carcomment'] != '' && $object['preinsurer'] != null && $object['preinsurer'] != '' && $object['idnecessary'] != null && $object['idnecessary'] != '' && $object['leasingname'] != null && $object['leasingname'] != '' && $object['nationality'] != null && $object['nationality'] != '' && $object['nationality'] != '' && $object['nationality'] != null && $object['uploadpolice'] != null && $object['uploadpolice'] != '' && $object['yearpurchase'] != null && $object['yearpurchase'] != '' && $object['thingscarried'] != null && $object['thingscarried'] != '' && $object['startinsurance'] != null && $object['startinsurance'] != '' && $object['commentatpolice'] != null && $object['commentatpolice'] != '' && $object['powerofattorney'] != null && $object['powerofattorney'] != '' && $object['insuranceamount'] != null && $object['insuranceamount'] != '' && $object['residencepermit'] != null && $object['residencepermit'] != '' && $object['uploadvehicleid'] != null && $object['uploadvehicleid'] != '' && $object['contractstartdate'] != null && $object['contractstartdate'] != '' && $object['firstcommissioning'] != null && $object['firstcommissioning'] != '' &&  $object['nationalityfinance'] != null && $object['nationalityfinance'] != '' && $object['wishedadditionalthings'] != null && $object['wishedadditionalthings'] != '' && $object['dateofissueofdriverslicense'] != null && $object['dateofissueofdriverslicense'] != '' && $object['whichcompaniesshouldmakeanoffer'] != null && $object['whichcompaniesshouldmakeanoffer'] != '') { return true;}
      return false;

   }


}



