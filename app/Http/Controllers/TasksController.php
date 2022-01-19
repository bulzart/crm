<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use App\Models\Admins;
use App\Models\appointment;
use App\Models\family;
use App\Models\lead;
use App\Models\notification;
use App\Models\Pendency;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Name\FullyQualified;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Livewire\Component;

class TasksController extends Controller
{
public function assignpendency($admin,$id,$desc = null){
$retor = Pendency::where('family_id',$id)->firstOrFail();
  if($retor != null){
    $pendency = new Pendency();
  $pendency->admin_id = (int) $admin;
  $pendency->family_id = (int) $id;
  $pendency->description = filter_var($desc,FILTER_SANITIZE_STRING);
  $family = DB::table('family_person')->where('id','=',$id)->update(['status' => 'Open']);
  $pendency->save();
}
}
  public function accepttask($id)
  {
    $app = lead::find($id);
    lead::where('id', $id)->update(['unsigned_data' => null, 'data' => $this->adddata((array) json_decode($app->data), (array) json_decode($app->unsigned_data))]);
    return redirect()->back()->with(['successs', 'Your action was done successfully!']);
  }
  public function dnotifications()
  {
    notification::where('receiver_id', Auth::guard('admins')->user()->id)->where('done', 0)->update(['done' => 1]);
  }
  public function today(Request $req)
  {
    $some_date = Carbon::now()->format('H:i');
    $now = (int) str_replace(':', '', $some_date);


    $admin = Auth::guard('admins')->user();
    $today = Carbon::now()->format("Y-m-d");
    if ($req->date != null) {
      if ($admin->hasRole('admin')) {
        $data = DB::table('leads')
        ->where('wantsonline', 0)
        ->where('appointment_date', $req->date)
        ->whereNotNull('assign_to_id')
        ->orderBy('time','desc')
        ->select('leads.first_name','leads.last_name','leads.address','leads.id')
        ->paginate(15);

     
      } elseif ($admin->hasRole('fs')) {
        $data = DB::table('leads')
        ->where('assign_to_id', Auth::guard('admins')->user()->id)
        ->where('wantsonline', 0)
        ->where('appointment_date', $req->date)
        ->orderBy('time','desc')
        ->select('leads.first_name','leads.last_name','leads.address','leads.id')
        ->paginate(15);
       

      }
    } else {
      if ($admin->hasRole('admin')) {
        if ($now > 2300) {
          $data = DB::table('leads')
          ->where('wantsonline', 0)
          ->where('appointment_date', Carbon::now()->addDays()->toDateString())
          ->whereNotNull('assign_to_id')
          ->orderBy('time','desc')
          ->select('leads.first_name','leads.last_name','leads.address','leads.id')
          ->paginate(15);
        } else {

          $data = DB::table('leads')
          ->where('wantsonline', 0)
          ->where('appointment_date', Carbon::now()->toDateString())
          ->whereNotNull('assign_to_id')
          ->orderBy('time','desc')
          ->select('leads.first_name','leads.last_name','leads.address','leads.id')
          ->paginate(15);
        }
      }
      if ($admin->hasRole('fs')) {

        if ($now > 2300) {
          $data = DB::table('leads')
          ->where('assign_to_id', $admin->id)
          ->where('wantsonline', 0)
          ->where('appointment_date', Carbon::now()->addDays()->toDateString())
          ->orderBy('time','desc')
          ->select('leads.first_name','leads.last_name','leads.address','leads.id')
          ->paginate(15);
        } else {
          $data = DB::table('leads')
          ->where('assign_to_id', $admin->id)
          ->where('wantsonline', 0)
          ->where('appointment_date', Carbon::now()->toDateString())
          ->orderBy('time','desc')
          ->select('leads.first_name','leads.last_name','leads.address','leads.id')
          ->paginate(15);
        }
      }
    }
    return $data;
  }

  public function vuedate(Request $req)
  {
    $page = $req->page;
    $day = Carbon::now()->format('d');
    $month = Carbon::now()->format('m');
    $year = Carbon::now()->format('Y');
    $fullcalendar = [];
    $br = 1;
    $dayofweek = 6;





    for ($i = 0; $i <= 365; $i++) {
      $fullcalendar[$i]['date'] = Carbon::now()->addDays($i)->format('Y-m-d');
      $fullcalendar[$i]['dayn'] = Carbon::now()->addDays($i)->format('l');
      $fullcalendar[$i]['day'] = Carbon::now()->addDays($i)->format('d');
      $fullcalendar[$i]['month'] = Carbon::now()->addDays($i)->format('M');
      $fullcalendar[$i]['year'] = Carbon::now()->addDays($i)->format('Y');
    }

    $calendar = [];
    $calendar[0] = $fullcalendar[$page - 4];
    $calendar[1] = $fullcalendar[$page - 3];
    $calendar[2] = $fullcalendar[$page - 2];
    $calendar[3] = $fullcalendar[$page - 1];
    return $calendar;


    return $fullcalendar;
  }

  public function searchword()
  {
      if(Auth::guard('admins')->user()->hasRole('fs')){
          $data = DB::table('family_person')
              ->join('leads','family_person.leads_id','=','leads.id')
              ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
              ->select('family_person.*')
              ->orderBy('family_person.first_name','asc')
              ->get();
          return view('costumers', compact('data'));

      }else{
          $data = family::orderBy('first_name','asc')->get();
          return view('costumers', compact('data'));
      }
  }
  public function costumers(Request $request)
  {

      $cnt = 0;
      $date1 = date('Y-m-d', strtotime($request->searchdate1));
      $n = date('Y-m-d', strtotime($request->searchdate2));
      $date2 = date('Y-m-d', strtotime($n . "+1 days"));
      $searchname = $request->searchname;
    if(Auth::guard('admins')->user()->hasRole('fs')){
        $data = DB::table('family_person')
            ->join('leads','family_person.leads_id','=','leads.id')
            ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
            ->select('family_person.*')
            ->get();
        if ($searchname != ''){
            $data = DB::table('family_person')
                ->join('leads','family_person.leads_id','=','leads.id')
                ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
                ->where('family_person.first_name','like','%'.$searchname.'%')
                ->orWhere('family_person.last_name','like','%'.$searchname.'%')
                ->select('family_person.*')
                ->get();

    }
        if (isset($request->searchdate1) && isset($request->searchdate2)) {
            $data = DB::table('family_person')
                ->join('leads','family_person.leads_id','=','leads.id')
                ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
                ->whereBetween('family_person.created_at', [$date1, $date2])
                ->select('family_person.*')
                ->get();

        }

        return view('costumers', compact('data'));

    }else {
        if (Auth::guard('admins')->check()){
            $data = family::all();
        }
        if ($searchname != null) {
            $data = family::where('last_name', 'like', '%' . $searchname . '%')
                ->orWhere('first_name', 'like', '%' . $searchname . '%')->get();
        }
        if (isset($request->searchdate1) && isset($request->searchdate2)) {
            $data = family::whereBetween('created_at', [$date1, $date2])->get();
        }
        $contracts = [];
        $datcnt = 0;
        foreach ($data as $dat) {

            if (Auth::guard('admins')->user()->hasRole('fs') && $dat->assign_to_id != Auth::guard('admins')->user()->id) {
                unset($data[$datcnt]);
                $datcnt++;
            }


            if ($dat->contracts != null) {
                $contracts[$dat->id] = json_decode($dat->contracts);
            }
        }

        return view('costumers', compact('data', 'contracts'));
    }
  }

  public function adddata($req = null, $object = null, $count = null)
  {
    $arr1 =  json_decode($req, true);
    $arr2 =  json_decode($object, true);
    if (count($arr1) >= count($arr2)) {
      foreach ($arr1 as $id => $text) {
        if ($arr2[$id] != null && $arr2[$id] != "") {
          $data[$id] = $arr2[$id];
        } elseif ($arr1[$id] != null && $arr1[$id] != "" && $arr2[$id] == '' || $arr2[$id] == null) {
          $data[$id] = $arr1[$id];
        } else {
          $data[$id] = null;
        }
      }
    } else {
      foreach ($arr2 as $id => $text) {
        if ($arr2[$id] != null && $arr2[$id] != "") {
          $data[$id] = $arr2[$id];
        } elseif ($arr1[$id] != null && $arr1[$id] != "" && $arr2[$id] == '' || $arr2[$id] == null) {
          $data[$id] = $arr1[$id];
        } else {
          $data[$id] = null;
        }
      }

      return $data;
    }
  }
  public function tasks(Request $req,$az = false)
  {
    $start = microtime(true);
    $cnt = 0;
    $cnt1 = 0;
    if (Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) {
        if (isset($req->searchpend)) {
            $pend = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name')
                ->where('pendencies.done', '=', 1)
                ->where('family_person.first_name', 'like', '%' . $req->searchpend . '%')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);

        } else {
            $pend = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->where('pendencies.done', '=', 1)
                ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);
        }
        if (isset($req->searchopen)) {
            $open = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->where('pendencies.done', '=', 0)
                ->where('family_person.first_name', 'like', '%' . $req->searchopen . '%')
                ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);
        } else {
            $open = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->where('pendencies.done', '=', 0)
                ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);
        }

        $answered = [];
        $opened = [];

        $answered = $pend;


            $opened = $open;
    }
    if (Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin')) {
if(Auth::guard('admins')->user()->hasRole('admin')){
      $tasks = DB::table('leads')
      ->where('completed','=','0')
      ->where('status_contract','!=','Done')
      ->orWhereNull('status_contract')
      ->where('status_task','!=','Done')
      ->select('leads.first_name','leads.last_name','leads.status_task','leads.id')
      ->paginate(20);



      $cntt = 0;

      $realopen = [];
      $pending = [];
      $opencnt = 0;
      $pendingcnt = 0;



          $opencnt = $tasks->total();

      $pending = DB::table('family_person')
      ->join('pendencies','family_person.id','=','pendencies.family_id')
      ->where('pendencies.done','=',0)
      ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
      ->paginate(20);

    }
    else{
      $tasks = DB::table('leads')
      ->where('completed','=','0')
      ->where('status_contract','!=','Done')
      ->orWhereNull('status_contract')
      ->where('status_task','!=','Done')
      ->where('assign_to_id',Auth::guard('admins')->user()->id)
      ->select('leads.first_name','leads.last_name','leads.status_task','leads.id')
      ->paginate(20);
       $tasks2 = [];
      $cntt = 0;

      $realopen = [];
      $pending = [];
      $opencnt = 0;
      $pendingcnt = 0;



       $opencnt = $tasks->total();

      $pending = DB::table('family_person')
      ->join('pendencies','family_person.id','=','pendencies.family_id')
      ->where('pendencies.done','=',0)
      ->where('pendencies.admin_id','=',Auth::guard('admins')->user()->id)
      ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
      ->paginate(20);

    }
    $cnt = 0;
    $costumers = family::all();
    $todaydate = Carbon::now()->format('m-d');

    $birthdays = [];
    foreach ($costumers as $cos) {
      if (substr($cos->birthdate, 5) == $todaydate) {
        $birthdays[$cnt]['birthday'] = $cos->birthdate;
        $now = (int) Carbon::now()->format('Y');
        $birth = (int) substr($cos->birthdate, -10, -6);
        $birthdays[$cnt]['age'] = $now - $birth;
        $birthdays[$cnt]['id'] = $cos->id;
        $birthdays[$cnt]['name'] = ucfirst($cos->first_name);
        $birthdays[$cnt]['lname'] = ucfirst($cos->last_name);
        $cnt++;
      }
    }
  }

if(Auth::guard('admins')->user()->hasRole('backoffice')) return view('tasks',compact('answered','pend','opened'));
if(Auth::guard('admins')->user()->hasRole('fs')) return view('tasks', compact('opencnt', 'pendingcnt', 'realopen', 'pending', 'birthdays', 'tasks'));
if(Auth::guard('admins')->user()->hasRole('admin')) return view('tasks', compact('opencnt', 'pendingcnt', 'realopen', 'pending', 'birthdays', 'tasks','answered','pend','opened'));

  }




 


  public function isdone($object): bool
  {

    if ($object['job'] != null && $object['email'] != null && $object['lenker'] != null && $object['lenker'] != '' && $object['comment'] != null && $object['comment'] != '' && $object['kmstand'] != null && $object['kmstand'] != "" && $object['society'] != null && $object['socity'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['noticeby'] != null && $object['noticeby'] != '' && $object['insurance'] != null && $object['insurance'] != '' && $object['carcomment'] != null && $object['carcomment'] != '' && $object['preinsurer'] != null && $object['preinsurer'] != '' && $object['idnecessary'] != null && $object['idnecessary'] != '' && $object['leasingname'] != null && $object['leasingname'] != '' && $object['nationality'] != null && $object['nationality'] != '' && $object['nationality'] != '' && $object['nationality'] != null && $object['uploadpolice'] != null && $object['uploadpolice'] != '' && $object['yearpurchase'] != null && $object['yearpurchase'] != '' && $object['thingscarried'] != null && $object['thingscarried'] != '' && $object['startinsurance'] != null && $object['startinsurance'] != '' && $object['commentatpolice'] != null && $object['commentatpolice'] != '' && $object['powerofattorney'] != null && $object['powerofattorney'] != '' && $object['insuranceamount'] != null && $object['insuranceamount'] != '' && $object['residencepermit'] != null && $object['residencepermit'] != '' && $object['uploadvehicleid'] != null && $object['uploadvehicleid'] != '' && $object['contractstartdate'] != null && $object['contractstartdate'] != '' && $object['firstcommissioning'] != null && $object['firstcommissioning'] != '' &&  $object['nationalityfinance'] != null && $object['nationalityfinance'] != '' && $object['wishedadditionalthings'] != null && $object['wishedadditionalthings'] != '' && $object['dateofissueofdriverslicense'] != null && $object['dateofissueofdriverslicense'] != '' && $object['whichcompaniesshouldmakeanoffer'] != null && $object['whichcompaniesshouldmakeanoffer'] != '') {
      return true;
    }
    return false;
  }
  public function confirmsms(Request $request)
  {
    $user_id = Auth::guard('admins')->user()->id;
    $cc = $request->cc;
    $number = $request->numberphone;
    $phonenumber = $cc . $number;
    if (Admins::where('id', $user_id)->update(['phonenumber' => $phonenumber, 'firsttime' => 0])) {
      return redirect()->route('dashboard');
    }
  }
  public function dates()
  {


  }
}
