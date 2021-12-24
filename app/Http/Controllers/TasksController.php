<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use App\Models\Admins;
use App\Models\appointment;
use App\Models\lead;
use App\Models\notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Name\FullyQualified;

class TasksController extends Controller
{

  public function accepttask($id){
  $app = appointment::find($id);
    appointment::where('id',$id)->update(['unsigned_data' => null,'data' => $this->adddata((array) json_decode($app->data),(array) json_decode($app->unsigned_data))]);
    return redirect()->back();
  }
    public function dnotifications(){
       notification::where('receiver_id',Auth::guard('admins')->user()->id)->where('done',0)->update(['done'=>1]);
    }
    public function today(Request $req){
      $some_date = Carbon::now()->format('H:i');
        $now = (int) str_replace(':','',$some_date);

         
      $admin = Auth::guard('admins')->user();
      $today = Carbon::now()->format("Y-m-d");
      if($req->date != null){
    if($admin->role == 'admin'){
      
    
        $data = lead::where('wantsonline',0)->where('appointmentdate',$req->date)->get();
    }
    elseif($admin->role == 'fs'){
      $data = lead::where('admin_id',Auth::guard('admins')->user()->id)->where('wantsonline',0)->where('appointmentdate',$req->date)->get();
    }
    
      }
      else{
        if($admin->role == 'admin'){
          if($now > 2300){
            $data = lead::where('wantsonline',0)->where('appointmentdate',Carbon::now()->addDays()->toDateString())->get();}
        else{

            $data = lead::where('wantsonline',0)->where('appointmentdate',Carbon::now()->toDateString())->get();

        }
      }
      if($admin->role == 'fs'){
        if($now > 2300){
          $data = lead::where('admin_id',$admin->id)->where('wantsonline',0)->where('appointmentdate',Carbon::now()->addDays()->toDateString())->get();}
      else{

          $data = lead::where('admin_id',$admin->id)->where('wantsonline',0)->where('appointmentdate',Carbon::now()->toDateString())->get();

      }
    }


      }
      return $data;
    }

    public function vuedate(Request $req){
$page = $req->page;
      $day = Carbon::now()->format('d');
      $month = Carbon::now()->format('m');
      $year = Carbon::now()->format('Y');
      $fullcalendar = [];
      $br = 1;
$dayofweek = 6;

$months = $long = array(
  'January',
  'February',
  'March',
  'April',
  'May',
  'June',
  'July',
  'August',
  'September',
  'October',
  'November',
  'December'
);


      for($i = 0; $i <= 365; $i++){
        $fullcalendar[$i]['date'] = Carbon::now()->addDays($i)->format('Y-m-d');
        $fullcalendar[$i]['dayn'] = Carbon::now()->addDays($i)->format('l');
        $fullcalendar[$i]['day'] = Carbon::now()->addDays($i)->format('d');
        $fullcalendar[$i]['month'] = Carbon::now()->addDays($i)->format('M');
        $fullcalendar[$i]['year'] = Carbon::now()->addDays($i)->format('Y');
      }

      $calendar = [];
      $calendar[0] = $fullcalendar[$page -4];
      $calendar[1] = $fullcalendar[$page - 3];
      $calendar[2] = $fullcalendar[$page -2];
      $calendar[3] = $fullcalendar[$page -1];
      return $calendar;


     return $fullcalendar;


    }

    public function searchword(){
        $data =  appointment::orderBy('name','asc')->get();
        return view('costumers',compact('data'));
    }
    public function costumers(Request $request){
        $searchname = $request->searchname;
        $cnt = 0;
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
        $contracts = [];
        foreach($data as $dat){
          if($dat->contracts != null){
          $contracts[$dat->id] = json_decode($dat->contracts);
      } 
        }

            return view('costumers', compact('data','contracts'));
         

      }

      public function adddata($req = null,$object = null,$count = null)
      {
        $data = null;
            $arr1 =  json_decode($req,true);
            $arr2 =  json_decode($object,true);
            foreach($arr1 as $id=>$text){
              if($arr2[$id] != null && $arr2[$id] != ""){
                $data[$id] = $arr2[$id];
              }
              elseif($arr1[$id] != null && $arr1[$id] != "" && $arr2[$id] == '' || $arr2[$id] == null){
                 $data[$id] = $arr1[$id];
              }

            }
            return $data;
          
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

   return view('tasks',compact('opencnt','pendingcnt','realopen','pending','birthdays'));
  }



	 public function documentform(Request $req,$id){
         $req->validate([
           'id' => 'exists:csapp,id'
         ]);

        $data = $req->all();

dd($data);
        $csapp = appointment::find($id);
        $data2 = (array) json_decode($csapp->data);
        $count = (int) $req->input('count');
        for($i = 0;$i <= $count;$i++){
     
   
           if($req->file('uploadvehicleid'.$i) != null){
              $file = $req->file('uploadvehicleid'.$i);
              $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i') . rand(1,999) .  '.' . $file->getClientOriginalExtension();
             $path = $file->storeAs('img',$filename);
             $data['uploadpolice'.$i] = filter_var($path,FILTER_SANITIZE_STRING);
           }

        }



  if($req->file('preinsurer') != null){
      $file = $req->file('preinsurer');
      $filename = str_replace('.',$file->guessClientExtension(),$file->getClientOriginalName()) . Carbon::now()->format('H-i')  . rand(1,999) .  '.' . $file->getClientOriginalExtension();
      $path = $file->storeAs('img',$filename);
      $data['preinsurer'] = filter_var($path,FILTER_SANITIZE_STRING);
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
    $datas = $this->adddata($data,$data2);
    $datas['admin_id'] = Auth::guard('admins')->user()->id;
    $datas['csapp'] = $csapp->id;

     $csapp->unsigned_data = json_encode($datas);
        $csapp->save();



  }




    public function isdone($object):bool{

      if($object['job'] != null && $object['email'] != null && $object['lenker'] != null && $object['lenker'] != '' && $object['comment'] != null && $object['comment'] != '' && $object['kmstand'] != null && $object['kmstand'] != "" && $object['society'] != null && $object['socity'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['insurance'] != null && $object['insurance'] != '' && $object['carcomment'] != null && $object['carcomment'] != '' && $object['preinsurer'] != null && $object['preinsurer'] != '' && $object['idnecessary'] != null && $object['idnecessary'] != '' && $object['leasingname'] != null && $object['leasingname'] != '' && $object['nationality'] != null && $object['nationality'] != '' && $object['nationality'] != '' && $object['nationality'] != null && $object['uploadpolice'] != null && $object['uploadpolice'] != '' && $object['yearpurchase'] != null && $object['yearpurchase'] != '' && $object['thingscarried'] != null && $object['thingscarried'] != '' && $object['startinsurance'] != null && $object['startinsurance'] != '' && $object['commentatpolice'] != null && $object['commentatpolice'] != '' && $object['powerofattorney'] != null && $object['powerofattorney'] != '' && $object['insuranceamount'] != null && $object['insuranceamount'] != '' && $object['residencepermit'] != null && $object['residencepermit'] != '' && $object['uploadvehicleid'] != null && $object['uploadvehicleid'] != '' && $object['contractstartdate'] != null && $object['contractstartdate'] != '' && $object['firstcommissioning'] != null && $object['firstcommissioning'] != '' &&  $object['nationalityfinance'] != null && $object['nationalityfinance'] != '' && $object['wishedadditionalthings'] != null && $object['wishedadditionalthings'] != '' && $object['dateofissueofdriverslicense'] != null && $object['dateofissueofdriverslicense'] != '' && $object['whichcompaniesshouldmakeanoffer'] != null && $object['whichcompaniesshouldmakeanoffer'] != '') { return true;}
      return false;

   }
   public function confirmsms(Request $request){
        $user_id = Auth::guard('admins')->user()->id;
        $cc = $request->cc;
        $number = $request->numberphone;
        $phonenumber = $cc . $number;
        if(Admins::where('id',$user_id)->update(['phonenumber'=> $phonenumber,'firsttime'=>0])){
             return redirect()->route('dashboard');
       }

   }


}



