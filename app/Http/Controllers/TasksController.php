<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use App\Models\Admins;
use App\Models\appointment;
use App\Models\CostumerProduktAutoversicherung;
use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktHausrat;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\family;
use App\Models\lead;
use App\Models\notification;
use App\Models\Pendency;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Name\FullyQualified;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Livewire\Component;

class TasksController extends Controller
{
public function assignpendency(Request $req){
  $id = (int) $req->id;
$title = $req->title ? $req->title : "";
  $pendency = Pendency::where('family_id',(int)$req->id)->first();
  if(!$pendency){
    $pendency = new Pendency();
    $pendency->title = $title;
  $pendency->admin_id = (int) $req->admin;
  $pendency->family_id = (int) $req->id;
  $pendency->description = filter_var($req->desc,FILTER_SANITIZE_STRING);
  $pendency->save();
  }
  else{
    $pendency->admin_id = (int) $req->admin;
    $pendency->done = 0;
    $pendency->title = $title;
    $pendency->completed = 0;
    $pendency->description = filter_var($req->desc,FILTER_SANITIZE_STRING);
    $pendency->save();

  }
  $family = DB::table('family_person')->where('id','=',$id)->update(['status' => 'Open']);

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
    $data = null;
    $cnt = 0;
    if ($req->date != null) {
      if ($admin->hasRole('admin') || Auth::user()->hasRole('salesmanager')) {
        foreach (DB::table('leads')
        ->where('wantsonline', 0)
        ->where('appointment_date', $req->date)
        ->whereNotNull('assign_to_id')
        ->orderBy('time','desc')
        ->where('assigned',1)
        ->where('completed',0)
        ->select('leads.first_name','leads.last_name','leads.address','leads.id')
        ->paginate(15) as $d){
            $data[$cnt] = $d;
            $val = (int) $d->id;
            $data[$cnt]->id = Crypt::encrypt($val * 1244);
            $cnt++;

        }


      } elseif ($admin->hasRole('fs')) {
          foreach (DB::table('leads')
                       ->where('wantsonline', 0)
                       ->where('appointment_date', $req->date)
                       ->whereNotNull('assign_to_id')
                       ->orderBy('time','desc')
                       ->where('assigned',1)
                       ->where('completed',0)
              ->where('leads.assign_to_id',Auth::guard('admins')->user()->id)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }


      }
      elseif(Auth::user()->hasRole('digital')) {
        foreach (DB::table('leads')
                       ->where('wantsonline', 1)
                       ->where('appointment_date', $req->date)
                       ->orderBy('time','desc')
                       ->where('completed',0)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }
      }
    } else {
      if ($admin->hasRole('admin') || Auth::user()->hasRole('salesmanager')) {
        if ($now > 2300) {
            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('assigned',1)
                         ->where('completed',0)
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->where('appointment_date', Carbon::now()->addDays()->toDateString())
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        } else {

            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('assigned',1)
                         ->where('completed',0)
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        }
      }
      if ($admin->hasRole('fs')) {

        if ($now > 2300) {
            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('assigned',1)
                         ->where('completed',0)
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->where('appointment_date', Carbon::now()->addDays()->toDateString())
                         ->where('leads.assign_to_id',Auth::guard('admins')->user()->id)
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        } else {
            foreach (DB::table('leads')
                         ->where('wantsonline', 0)
                         ->whereNotNull('assign_to_id')
                         ->orderBy('time','desc')
                         ->where('assigned',1)
                         ->where('completed',0)
                         ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                         ->where('leads.assign_to_id',Auth::guard('admins')->user()->id)
                         ->paginate(15) as $d){
                $data[$cnt] = $d;
                $val = (int) $d->id;
                $data[$cnt]->id = Crypt::encrypt($val * 1244);
                $cnt++;

            }
        }
      }
      elseif(Auth::user()->hasRole('digital')){

        if ($now > 2300) {
          foreach (DB::table('leads')
                       ->where('wantsonline', 1)
                       ->whereNotNull('assign_to_id')
                       ->orderBy('time','desc')
                       ->where('completed',0)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->where('appointment_date', Carbon::now()->addDays()->toDateString())
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }
      } else {
          foreach (DB::table('leads')
                       ->where('wantsonline', 1)
                       ->orderBy('time','desc')
                       ->where('completed',0)
                       ->select('leads.first_name','leads.last_name','leads.address','leads.id')
                       ->paginate(15) as $d){
              $data[$cnt] = $d;
              $val = (int) $d->id;
              $data[$cnt]->id = Crypt::encrypt($val * 1244);
              $cnt++;

          }

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
      $fullcalendar[$i]['date'] =  Carbon::now()->addDays($i)->format('Y-m-d');
      $fullcalendar[$i]['dayn'] =  Carbon::now()->addDays($i)->format('l');
      $fullcalendar[$i]['day'] =   Carbon::now()->addDays($i)->format('d');
      $fullcalendar[$i]['month'] = Carbon::now()->addDays($i)->format('M');
      $fullcalendar[$i]['year'] =  Carbon::now()->addDays($i)->format('Y');
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
      if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('fs')){
          $data = DB::table('family_person')
              ->join('leads','family_person.leads_id','=','leads.id')
              ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
              ->where('family_person.status','Done')
              ->select('family_person.*')
              ->orderBy('family_person.first_name','asc')
              ->get();

          $cnt = 0;
          foreach ($data as $dat) {
              $grundversicherungP[$cnt] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->first();
              $retchsschutzP[$cnt] = CostumerProduktRechtsschutz::where('person_id_PR',$dat->id)->first();
              $vorsorgeP[$cnt] = CostumerProduktVorsorge::where('person_id_PV',$dat->id)->first();
              $zusatzversicherungP[$cnt] = CostumerProduktZusatzversicherung::where('person_id_PZ',$dat->id)->first();
              $autoversicherungP[$cnt] = CostumerProduktAutoversicherung::where('person_id_PA', $dat->id)->first();
              $hausratP[$cnt] = CostumerProduktHausrat::where('person_id_PH', $dat->id)->first();

              $cnt++;
          }
          return view('costumers', compact('data', 'grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP'));

      }else{
          $data = family::where('status','Done')->orderBy('first_name','asc')->get();
          $cnt = 0;
          foreach ($data as $dat) {
              $grundversicherungP[$cnt] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->first();
              $retchsschutzP[$cnt] = CostumerProduktRechtsschutz::where('person_id_PR',$dat->id)->first();
              $vorsorgeP[$cnt] = CostumerProduktVorsorge::where('person_id_PV',$dat->id)->first();
              $zusatzversicherungP[$cnt] = CostumerProduktZusatzversicherung::where('person_id_PZ',$dat->id)->first();
              $autoversicherungP[$cnt] = CostumerProduktAutoversicherung::where('person_id_PA', $dat->id)->first();
              $hausratP[$cnt] = CostumerProduktHausrat::where('person_id_PH', $dat->id)->first();

              $cnt++;
          }
          return view('costumers', compact('data', 'grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP'));

      }
  }
  public function costumers(Request $request)
  {
      $grundversicherungP = null;
       $retchsschutzP = null;
        $vorsorgeP = null;
            $zusatzversicherungP = null;
            $autoversicherungP = null;
            $hausratP = null;
      $cnt = 0;
      $date1 = date('Y-m-d', strtotime($request->searchdate1));
      $n = date('Y-m-d', strtotime($request->searchdate2));
      $date2 = date('Y-m-d', strtotime($n . "+1 days"));
      $searchname = $request->searchname;
    if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('digital')){
        $data = DB::table('family_person')
            ->join('leads','family_person.leads_id','=','leads.id')
            ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
            ->where('family_person.status','Done')
            ->select('family_person.*')
            ->get();
        if ($searchname != ''){
            $data = DB::table('family_person')
                ->join('leads','family_person.leads_id','=','leads.id')
                ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
                ->where('family_person.first_name','like','%'.$searchname.'%')
                ->orWhere('family_person.last_name','like','%'.$searchname.'%')
                ->where('family_person.status','Done')
                ->select('family_person.*')
                ->get();

    }
        if (isset($request->searchdate1) && isset($request->searchdate2)) {
            $data = DB::table('family_person')
                ->join('leads','family_person.leads_id','=','leads.id')
                ->where('leads.assign_to_id','=',Auth::guard('admins')->user()->id)
                ->where('family_person.status','Done')
                ->whereBetween('family_person.created_at', [$date1, $date2])
                ->select('family_person.*')
                ->get();

        }
        $cnt = 0;
        foreach ($data as $dat) {
            $grundversicherungP[$cnt] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->first();
            $retchsschutzP[$cnt] = CostumerProduktRechtsschutz::where('person_id_PR',$dat->id)->first();
            $vorsorgeP[$cnt] = CostumerProduktVorsorge::where('person_id_PV',$dat->id)->first();
            $zusatzversicherungP[$cnt] = CostumerProduktZusatzversicherung::where('person_id_PZ',$dat->id)->first();
            $autoversicherungP[$cnt] = CostumerProduktAutoversicherung::where('person_id_PA', $dat->id)->first();
            $hausratP[$cnt] = CostumerProduktHausrat::where('person_id_PH', $dat->id)->first();

            $cnt++;
        }
        return view('costumers', compact('data', 'grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP'));

    }else {
        if (Auth::guard('admins')->check()) {
            $data = family::where('status', 'Done')->get();
        }
        if ($searchname != null) {
            $data = family::where('last_name', 'like', '%' . $searchname . '%')
                ->orWhere('first_name', 'like', '%' . $searchname . '%')
                ->where('status', 'Done')
                ->get();
        }
        if (isset($request->searchdate1) && isset($request->searchdate2)) {
            $data = family::where('status', 'Done')
                ->whereBetween('created_at', [$date1, $date2])->get();

        }
        $contracts = [];
        $datcnt = 0;

            $cnt = 0;
        foreach ($data as $dat) {
            $grundversicherungP[$cnt] = CostumerProduktGrundversicherung::where('person_id_PG', $dat->id)->first();
            $retchsschutzP[$cnt] = CostumerProduktRechtsschutz::where('person_id_PR',$dat->id)->first();
            $vorsorgeP[$cnt] = CostumerProduktVorsorge::where('person_id_PV',$dat->id)->first();
            $zusatzversicherungP[$cnt] = CostumerProduktZusatzversicherung::where('person_id_PZ',$dat->id)->first();
            $autoversicherungP[$cnt] = CostumerProduktAutoversicherung::where('person_id_PA', $dat->id)->first();
            $hausratP[$cnt] = CostumerProduktHausrat::where('person_id_PH', $dat->id)->first();

            $cnt++;
        }

        return view('costumers', compact('data', 'contracts','grundversicherungP','retchsschutzP','vorsorgeP','autoversicherungP','hausratP','zusatzversicherungP'));
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
                ->select('family_person.first_name','pendencies.admin_id', 'pendencies.family_id','pendencies.*','family_person.id', 'family_person.last_name')
                ->where('pendencies.done', '=', 1)
                ->where('pendencies.completed',0)
                ->where('family_person.first_name', 'like', '%' . $req->searchpend . '%')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);

        } else {
            $pend = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->where('pendencies.done', '=', 1)
                ->where('pendencies.completed',0)
                ->select('family_person.first_name', 'pendencies.admin_id','pendencies.family_id','pendencies.*','family_person.id', 'family_person.last_name')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);
        }
        if (isset($req->searchopen)) {
            $open = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->where('pendencies.done', '=', 0)
                ->where('family_person.first_name', 'like', '%' . $req->searchopen . '%')
                ->select('family_person.first_name', 'pendencies.admin_id','pendencies.family_id', 'family_person.id', 'family_person.last_name','pendencies.*')
                ->orderBy('family_person.first_name', 'asc')
                ->paginate(20);
        } else {
            $open = DB::table('family_person')
                ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                ->where('pendencies.done', '=', 0)
                ->select('family_person.first_name', 'pendencies.admin_id','pendencies.family_id', 'family_person.id', 'family_person.last_name','pendencies.*')
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
      $tasks = DB::table('family_person')
      ->join('leads','family_person.leads_id','=','leads.id')
      ->where('status','!=','Done')
      ->select('family_person.*')
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
      $tasks = DB::table('family_person')
      ->join('leads','family_person.leads_id','=','leads.id')
      ->where('status','!=','Done')
      ->where('leads.assign_to_id',Auth::guard('admins')->user()->id)
      ->select('family_person.*')
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
