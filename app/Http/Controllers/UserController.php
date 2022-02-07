<?php

namespace App\Http\Controllers;

use App\Events\RejectLead;
use App\Imports\LeadImport;
use App\Imports\LeadsImport;
use App\Imports\TestImport;
use App\Models\Admins;
use App\Models\CostumerProduktAutoversicherung;
use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktHausrat;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\Deletedlead;
use App\Models\PersonalAppointment;
use App\Models\rejectedlead;
use App\Models\Trainings;
use App\Models\User;
use App\Mail\confirmcode;
use App\Models\appointment;
use App\Models\campaigns;
use App\Models\chat;
use App\Models\Costumer;
use App\Models\family;
use App\Models\lead;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Excel;
use Nexmo;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Middleware\confirmedcode;
use App\Models\lead_history;
use App\Models\lead_info;
use App\Traits\FileManagerTrait;
use DB;
use Faker;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Crypt;
use App\Models\LeadDataPlus;

class UserController extends Controller
{
    use FileManagerTrait;
    public function __construct(){
        $this->middleware(confirmedcode::class);
    }
    public function rleads(){
        $leads = DB::table('leads_history')
        ->join('leads','leads_history.leads_id','leads.id')

        ->select('leads.first_name','leads.id','leads.telephone','leads_history.status','leads.number_of_persons')
        ->get();

        return view('rleads',compact('leads'));
    }
    public function closenots()
    {
        notification::where('receiver_id', Auth::guard('admins')->user()->id)->update(['done' => 1]);
    }
    public function addslead(Request $req){
        $lead = new lead();
        $lead->first_name = filter_var($req->name,FILTER_SANITIZE_STRING);
        $lead->last_name = filter_var($req->lname,FILTER_SANITIZE_STRING);
        $lead->telephone = filter_var($req->telephone,FILTER_SANITIZE_STRING);
        $lead->birthdate = $req->geburstdatum;
        $lead->number_of_persons = (int) $req->haushalt;
        $lead->campaign_id = (int) $req->campaign;
        $lead->address = $req->plzort;
        $lead->save();
        $leadi = new lead_info();
        $leadi->grund = $req->grund;
        $leadi->kampagne = $req->kampagne;
        $leadi->lead_id = $lead->id;
        $leadi->krankenkasse = $req->krankenkasse;
        $leadi->wichtig = $req->wichtig;
        $leadi->bewertung = $req->bewertung;
        $leadi->teilnahme = $req->teilnahme;
        $leadi->save();
        $lead->slug = 'qwesssewssew-' . uniqid();
        if($lead->save()){
            return redirect()->route('leads')->with('success','Lead was succesfully inserted');
        }else{
            return redirect()->back()->with('fail','Fail To Insert');
        }

    }

    public function acceptapp($id)
    {
        $lead = lead::find($id);
        if (Auth::guard('admins')->user()->hasRole('admin')) {
            $lead->assigned = 1;
            $lead->save();
            return redirect()->back();
        } else if ($lead->assign_to_id == Auth::guard('admins')->user()->id) {
            $lead->assigned = 1;
            $lead->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function smsconfirmation()
    {
        return view('confirmcode');
    }

    public function rnlogin()
    {
        if (!Auth::guard('admins')->check()) {
            $roles = Role::all();
            return view('login', compact('roles'));
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function notifications()
    {
        $not = notification::where('receiver_id', Auth::guard('admins')->user()->id)->where('done', 0)->get();
        $not['cnt'] = notification::where('receiver_id', Auth::guard('admins')->user()->id)->where('done', 0)->get()->count();
        return $not;
    }

    public function getlead($campaign)
    {
        $campaign = campaigns::where('name', $campaign)->get();

        return view('getlead', compact('campaign'));
    }

    public function addappointment(Request $req)
    {
        $req->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'postal' => 'required',
            'location' => 'required',
            'count' => 'min:1',
            'appdate' => 'required',
            'apptime' => 'required',
            'nr'=> 'required',
            'zufriedenheit' => 'required',
            'bemerkung' => 'required',
            'sprache' => 'required'
        ]);

        $lead = new lead();
        $lead->first_name = filter_var($req->input('fname'), FILTER_SANITIZE_STRING);
        $lead->last_name = filter_var($req->input('lname'), FILTER_SANITIZE_STRING);
        $lead->telephone = filter_var($req->input('phone'), FILTER_SANITIZE_STRING);
        $lead->address = filter_var($req->input('address'), FILTER_SANITIZE_STRING);
        $lead->postal_code = filter_var($req->input('postal'), FILTER_SANITIZE_STRING);
        $lead->city = filter_var($req->input('nr').$req->input('location'), FILTER_SANITIZE_STRING);
        $lead->nationality = filter_var($req->input('country'), FILTER_SANITIZE_STRING);
        $lead->appointment_date = filter_var($req->input('appdate'), FILTER_SANITIZE_STRING);
        $lead->time = filter_var($req->input('apptime'), FILTER_SANITIZE_STRING);
       // $lead->birthdate = filter_var($req->input('appbirthdate'), FILTER_SANITIZE_STRING);
        $lead->sprache = filter_var($req->input('sprache'), FILTER_SANITIZE_STRING);
        $lead->zufriedenheit = filter_var($req->input('zufriedenheit'), FILTER_SANITIZE_STRING);
        $lead->bemerkung = filter_var($req->input('bemerkung'), FILTER_SANITIZE_STRING);
        $lead->number_of_persons = (int)$req->input('count');
        $lead->campaign_id = (int)$req->input('campaign');
        $lead->assigned = 1;
        $campaign = campaigns::where('id', $req->input('campaign'))->get();
        if ($req->input('online') == 'yes') {
            $lead->wantsonline = 1;
        } else {
            $lead->wantsonline = 0;
            if (Auth::guard('admins')->user()->hasRole('fs')){
                $lead->assign_to_id = Auth::guard('admins')->user()->id;
            }
            else{
                if($req->input('admin') != ''){
                    Admins::findorFail($req->input('admin'));
                $lead->assign_to_id = (int) $req->input('admin');
                }
                else{
                    $lead->assigned = 0;
                }
            }
        }
        $address = [];

        $address = filter_var($req->input('address'), FILTER_SANITIZE_STRING);
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=AIzaSyDscxZzYju_pJGNA2zu1lXOqJuubCdPu0o';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($responseJson);
        if ($response->status == 'OK') {
            $latitude = $response->results[0]->geometry->location->lat;
            $longitude = $response->results[0]->geometry->location->lng;
        }
        $lead->latitude = $latitude;
        $lead->longitude = $longitude;


        if ($lead->save()) {
            $lead->slug = Str::slug($req->input('fname')) . '-' . $lead->id;
            $lead->save();
            return redirect()->back()->with('success', 'You joined successfully, our team will try to contact you as soon as possible!');
        } else {
            return redirect()->route('getlead')->with('fail', 'Your joined fail');
        }
    }


    public function dlead($id)
    {
        //   lead::where('id',$id)->delete();
        $id = Crypt::decrypt($id) / 1244;
        $leads = lead::find($id);
        return view('deletedlead', compact('leads'));
    }

    public function deletedlead(Request $request, $id)
    {

        $leads = lead::find($id);
if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || $leads->assign_to_id == Auth::guard('admins')->user()->id){
        $deletedlead = new Deletedlead();
        $deletedlead->name = $leads->first_name;
        $deletedlead->address = $leads->address;
        $deletedlead->count = $leads->number_of_persons;
        $deletedlead->date = Carbon::now();
        $deletedlead->reason = $request->reason;
        $deletedlead->comment = $request->comment;

        $deletedlead->save();


        if ($leads->delete()) {
            return redirect()->route('leads')->with('success', 'Lead Deleted Successfuly');
        } else {
            return redirect()->route('leads')->with('fail', 'Lead Deleted Fail');
        }
    }
    else{
        return redirect()->back();
    }
    }

    public function addappointmentfile(Request $request)
    {

        // $request->validate([
        //     'file' => 'required|mimes:xlsx,xls,csv'
        // ]);
        $file = $request->file('file');

        \Maatwebsite\Excel\Facades\Excel::import(new LeadImport, $file);

    }


    public function insertappointment()
    {
        if (Auth::guard('admins')->user()->hasRole('fs')){
            $admins = Auth::guard('admins')->user();
        }else {
            $admins = Admins::all();
        }
        return view('insterappointment', compact('admins'));
    }


    public function leads(Request $req)
    {




            $asigned = [];
            if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager')) {
                $leads = lead::where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->paginate(200);
                $asigned = lead::where('completed', '0')->where('assigned', 0)->whereNotNull('assign_to_id')->paginate(200);
            } elseif (Auth::guard('admins')->user()->hasRole('fs')) {
                $leads = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('assigned', 0)->paginate(25);
            }




$insta = DB::table('leads')->where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->where('campaign_id',1)->count();
$facebook = DB::table('leads')->where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->where('campaign_id',2)->count();
$sana = DB::table('leads')->where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->where('campaign_id',3)->count();

            $total = array('instagram' => $insta, 'facebook' => $facebook, 'sana' => $sana);
            $admins = Admins::role('fs')->get();

            return view('leads', compact('leads', 'total', 'asigned','admins'));


    }

    public function asignlead(Request $req, $id)
    {

        $req->validate([
            'personen' => 'required',
            'apptime' => 'required',
            'appointmentdate' => 'required'
        ]);


        $lead = lead::find($id);
        $lead->berater = $req->berater ? $req->berater : $lead->berater;
        $lead->address = $req->address ? $req->nr . $req->address : $lead->address;
        $lead->assign_to_id = Auth::user()->id;
        $lead->nationality = $req->nationality ? $req->nationality : $lead->nationality;
        $lead->telephone = $req->telephone ? $req->telephone : $lead->telephone;
        $lead->time = $req->apptime ? filter_var($req->input('apptime'), FILTER_SANITIZE_STRING) : null;
        $lead->postal_code = $req->zip ? $req->zip : $lead->postal_code;
        $lead->first_name = $req->name ? $req->name : $lead->first_name;
        $lead->last_name = $req->lname ? $req->lname : $lead->last_name;
        $lead->number_of_persons = $req->personen ? $req->personen :  $lead->number_of_persons;
        $lead->city = $req->ort ? $req->ort : $lead->city;
        $lead->appointment_date =  $req->appointmentdate ? filter_var($req->input('appointmentdate'), FILTER_SANITIZE_STRING) : null;
        $lead->assigned = 1;
        $lead->gesundheit = $req->gesundheit ? $req->gesundheit : $lead->gesundheit;
        $lead->zufriedenheit = $req->zufriedenheit ? $req->zufriedenheit : $lead->zufriedenheit;
        $lead->bemerkung = $req->bemerkung ? $req->bemerkung : $lead->bemerkung;
        $lead->sprache = $req->sprache ? $req->sprache : $lead->sprache;
        $lead->agent = $req->agent ? $req->agent : $lead->agent;


        if ($lead->save()) {
            return redirect()->route('leads')->with('success', 'Your action has been done successfuly');
        } else {
            return redirect()->route('leads')->with('fail', 'Your action has failed');
        }
    }

    public function appointbyadmin($id)
    {
        $lead = lead::find($id);
        return view('appointadmin', compact('lead'));
    }

    public function reject($id)
    {
        $lead = lead::find($id);
        $lead->assigned = 0;
        $lead->save();
        return redirect()->route('');
    }

    public function alead($id)
    {
        // $id = Crypt::decrypt($id) / 1244;

        if (lead::find($id)->assigned == 1 && lead::find($id)->assign_to_id != null) {
            return redirect()->back();
        } else {
            $role = Role::find(1);
            $admins = Admins::role($role)->get();
            $lead = lead::find($id);
            return view('alead', compact('admins', 'lead'));
        }
    }


    public function trylogin(Request $req)
    {
        $email = filter_var($req->input('email'), FILTER_SANITIZE_STRING);
        $password = filter_var($req->input('password'), FILTER_SANITIZE_STRING);

        $remember = $req->input('remember') == 'on' ? true : false;
        if (Auth::guard('admins')->attempt(['email' => $email, 'password' => $password], $remember)) {
            $req->session()->regenerate();
            $pin = random_int(1000, 9999);
            $user = Auth::guard('admins')->user();
            $user->confirmed = 0;
            $user->pin = $pin;


             // if($rolee[0] != null){
               // $user->removeRole($rolee[0]);
                //$user->assignRole($role);}

                //  Nexmo::message()->send([
                //  'to' => '38345917726',
                //  'from' => env('NEXMO_KEY'),
                // 'text' => '12345']);
                $user->save();
                //\Mail::to(Auth::guard('admins')->user()->email)->send(new confirmcode($pin));


            return redirect()->route('dashboard');


        } else {
            return redirect()->route('rnlogin');
        }
    }

    public function confirmcode(Request $req)
    {
        $c1 = (int)$req->input('c1');
        $c2 = (int)$req->input('c2');
        $c3 = (int)$req->input('c3');
        $c4 = (int)$req->input('c4');
        $pin = $c1 . $c2 . $c3 . $c4;
        $pin = (int)$pin;
        $user = Admins::find(Auth::guard('admins')->user()->id);
        if ($pin === $user->pin) {
            $user->confirmed = 1;
            $user->save();
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('notauth', 'PIN war falsch');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('admins')->check()) {
            $perdoruesi = Admins::where('id', Auth::guard('admins')->user()->id)->first();
            $perdoruesi->online = 0;
            $perdoruesi->confirmed = 0;
            $perdoruesi->save();
            Auth::guard('admins')->logout();
            $request->session()->regenerateToken();
        }
        return redirect()->route('rnlogin');
    }


    public function completeapp(Request $req, $id)
    {
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $lead = lead::find($idd);

        $cnt = $lead->number_of_persons;

        for ($i = 1; $i <= $cnt; $i++) {
            if($req->input('fname' . $i) != null && $req->input('birthday' . $i) != null && $req->input('lname' . $i) != null){

            $family = new family();
            $family->first_name = filter_var($req->input('fname' . $i));
            $family->birthdate = filter_var($req->input('birthday' . $i));
            $family->last_name = filter_var($req->input('lname' . $i));
            $family->leads_id = (int)$idd;
            $family->status = "Open";
          $family->save();
        }
    }
        $lead->status_task = "open";


        $lead->completed = 1;
    $lead->save();
return redirect()->route('tasks');


    }

    public function filterbydateapp(Request $req)
    {
        $req->validate([
            'fbydate' => 'required'
        ]);

        $appointments = lead::where('appointment_date', date('Y-m-d', strtotime($req->input('fbydate'))))->where('admin_id', Auth::guard('admins')->user()->id)->where('wantsonline', 0)->get();

        $leadscount = lead::where('assign_to_id', null)->where('assigned', 0)->get()->count();
        $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointmentdate', Carbon::now()->toDateString())->where('wantsonline', 0)->where('assigned', 1)->get()->count();

        return view('dashboard', compact('appointments', 'leadscount', 'todayAppointCount'));
    }

    public function dealclosed($id)
    {

        $id = Crypt::decrypt($id) / 1244;

        $app = lead::where('id', $id)->first();
        if ($app->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || $app->wantsonline == 1 && Auth::user()->hasRole('digital')) {
            return view('completelead', compact('app'));
        } else {
            return redirect()->back();
        }
    }

    public function dealnotclosed($id)
    {

        $leads = lead::where('id', $id)->first();
        if ($leads->assign_to_id != null && $leads->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin')) {
            return view('rejectedleads', compact('leads'));
        } else {
            return redirect()->back();
        }
    }

    public function rejectedleads(Request $request,$status = null)
    {
        $leads_id = (int) $request->leadsid;
        $user_id = Auth::user()->id;

        if($status != null){
        $status = (int) $status;
        }
        if($status === 0) {
            $reason = 'Rejected';  lead::where('id', $leads_id)->update(['assign_to_id' => null, 'assigned' => 0]);
        }elseif($status === 1){
            $reason = 'Pending';
            lead::where('id', $leads_id)->update(['assign_to_id' => null, 'assigned' => 0]);
        }else{
            $reason = $request->reason;
            lead::where('id', $leads_id)->update(['assign_to_id' => null, 'assigned' => 0,'rejected' => 1]);
        }

          $image = $request->hasFile('image') ? $this->storeFile($request->input('image'),'img') : null;

          $credss = [];

          $rejectedlead = new lead_history();

          $rejectedlead->leads_id = $leads_id;
          $rejectedlead->status = $reason;
          $rejectedlead->image = $image;
          $rejectedlead->admin_id = Auth::user()->id;
          if($rejectedlead->save()){
              return redirect()->back()->with('success','Action was done succesfully');
          }
          else{
            return redirect()->back()->with('success','Action failed');
          }

    }

    public function rejectlead(Request $request,$id){
        $id = Crypt::decrypt($id) / 1244;

        $rejectlead = new rejectedlead();

        $rejectlead->leads_id = $id;
        $rejectlead->reason = $request->reason;
        $file = $request->file('image');
        $rejectlead->image = $this->storeFile($file,'img');

        if($rejectlead->save()){
            return redirect()->route('dashboard')->with('success', 'Action Made Successfuly');
        }else{
            return redirect()->route('dashboard')->with('fail', 'Action Fail');

        }
    }

    public function dashboard(Request $req)
    {
    if(!Auth::guard('admins')->check()){
       return redirect()->route('rnlogin');
    }
            $getmonth = isset($req->getmonth) ? $req->getmonth : "";

$taskcnt = 0;

            date_default_timezone_set('Europe/Berlin');



            if (Auth::guard('admins')->check()) {
                $pendingcnt = 0;
                $opencnt = 0;
                $done = 0;
                $recorded = 0;
                $morethan30 = [];
                $pendencies = [];
                $taskcnt = 0;
                $tasks = null;

                if (Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) {
             $pcnt = 0;
             $mcnt = 0;
                    foreach(DB::table('family_person')
                    ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                    ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name','pendencies.created_at','pendencies.done','pendencies.completed')
                    ->orderBy('family_person.first_name', 'asc')
                    ->where('done',1)
                    ->get() as $task){
                        if($task->completed == 0) {$pendencies[$pcnt] = $task; $pcnt++;}
                        if(strtotime($task->created_at) < strtotime(Carbon::now()->subDays(30)->format('Y-m-d'))) {$morethan30[$mcnt] = $task; $mcnt++;}
                    }


                    $pendingcnt = DB::table('family_person')
                    ->join('pendencies', 'family_person.id', '=', 'pendencies.family_id')
                    ->select('family_person.first_name', 'pendencies.family_id', 'family_person.id', 'family_person.last_name')
                    ->where('pendencies.done', '=', 0)
                    ->orderBy('family_person.first_name', 'asc')
                    ->count();

            }
            if(Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::user()->hasRole('digital')){

                if(Auth::guard('admins')->user()->hasRole('fs'))
                {

                    $pending = DB::table('family_person')
                    ->join('pendencies','family_person.id','=','pendencies.family_id')
                    ->where('pendencies.done','=',0)
                    ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
                    ->where('pendencies.admin_id',Auth::user()->id)
                    ->count();
                    $tasks = DB::table('leads')
                    ->where('completed','=','0')
                    ->where('status_contract','!=','Done')
                    ->orWhereNull('status_contract')
                    ->where('status_task','!=','Done')
                    ->where('assign_to_id',Auth::guard('admins')->user()->id)
                    ->count();
                    $done = DB::table('leads')
                    ->where('completed',1)
                    ->where('status_contract','Done')
                    ->where('assign_to_id',Auth::guard('admins')->user()->id)
                    ->where('status_task','Done')
                    ->count();


        }

        elseif (Auth::user()->hasRole('admin')){

      $pending = DB::table('family_person')
      ->join('pendencies','family_person.id','=','pendencies.family_id')
      ->where('pendencies.done','=',0)
      ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
      ->count();
      $tasks = DB::table('leads')
      ->where('completed','=','0')
      ->where('status_contract','!=','Done')
      ->orWhereNull('status_contract')
      ->where('status_task','!=','Done')
      ->count();
      $done = DB::table('family_person')
      ->join('pendencies','family_person.id','pendencies.family_id')
      ->where('pendencies.completed',1)
      ->count();

    }
    else{
          $pending = DB::table('family_person')
        ->join('pendencies','family_person.id','=','pendencies.family_id')
        ->where('pendencies.done','=',0)
        ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
        ->where('pendencies.admin_id',Auth::user()->id)
        ->count();
        $tasks = DB::table('leads')
        ->where('completed','=','0')
        ->where('status_contract','!=','Done')
        ->orWhereNull('status_contract')
        ->where('status_task','!=','Done')
        ->where('assign_to_id',Auth::guard('admins')->user()->id)
        ->count();
        $done = DB::table('leads')
        ->where('completed',1)
        ->where('status_contract','Done')
        ->where('assign_to_id',Auth::guard('admins')->user()->id)
        ->where('status_task','Done')
        ->count();
    }
                $percnt = 0.00;

                if($tasks != 0){
                    $percnt = (100 / $tasks) * $done;
                }


                $leadscount = DB::table('leads')->where('assign_to_id', null)->where('assigned', 0)->count();

            }
                if(Auth::guard('admins')->user()->hasRole('fs') || Auth::user()->hasRole('digital')) {
                    if (Auth::guard('admins')->user()->hasRole('fs')) {
                        $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 0)->where('assigned', 1)->get()->count();
                    } else {
                        $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 1)->where('assigned', 1)->get()->count();
                    }

                             $grundprov = 0;
                             $grundoffen = 0;
                             $grundauf = 0;
                             $autoprov = 0;
                             $autoffen = 0;
                             $autoauf = 0;
                             $zusaprov = 0;
                             $zusaoffen = 0;
                             $zusauf = 0;
                             $hausprov = 0;
                             $hausoffen = 0;
                             $hausauf = 0;
                             $rechprov = 0;
                             $rechoffen = 0;
                             $rechauf = 0;
                             $vorsprov = 0;
                             $voroff = 0;
                             $vorauf = 0;
                     foreach(DB::table('family_person')
                    ->join('leads','family_person.leads_id','leads.id')
                    ->where('leads.assign_to_id',Auth::user()->id)
                    ->join('costumer_produkt_grundversicherung','costumer_produkt_grundversicherung.person_id_PG','family_person.id')
                    ->select('costumer_produkt_grundversicherung.status_PG')
                    ->get() as $status){
                
                        if($status->status_PG == 'Provisionert'){ $grundprov++;}
                        elseif($status->status_PG == 'Offen') { $grundoffen++;}
                        elseif($status->status_PG == 'Aufgenomen') { $grundauf++;}
                    }
                    foreach(DB::table('family_person')
                    ->join('leads','family_person.leads_id','leads.id')
                    ->where('leads.assign_to_id',Auth::user()->id)
                    ->join('costumer_produkt_autoversicherung','costumer_produkt_autoversicherung.person_id_PA','family_person.id')
                    ->select('costumer_produkt_autoversicherung.status_PA')
                    ->get() as $status){
                        if($status->status_PA == 'Provisionert'){ $autoprov++;}
                        elseif($status->status_PA == 'Offen') { $autoffen++;}
                        elseif($status->status_PA == 'Aufgenomen') { $autoauf++;}
                    }
                    foreach(DB::table('family_person')
                    ->join('leads','family_person.leads_id','leads.id')
                    ->where('leads.assign_to_id',Auth::user()->id)
                    ->join('costumer_podukt_zusatzversicherung','costumer_podukt_zusatzversicherung.person_id_PZ','family_person.id')
                    ->select('costumer_podukt_zusatzversicherung.status_PZ')
                    ->get() as $status){
                        if($status->status_PZ == 'Provisionert'){ $zusaprov++;}
                        elseif($status->status_PZ == 'Offen') { $zusaoffen++;}
                        elseif($status->status_PZ == 'Aufgenomen') { $zusauf++;}
                    }
                    foreach(DB::table('family_person')
                    ->join('leads','family_person.leads_id','leads.id')
                    ->where('leads.assign_to_id',Auth::user()->id)
                    ->join('costumer_produkt_hausrat','costumer_produkt_hausrat.person_id_PH','family_person.id')
                    ->select('costumer_produkt_hausrat.status_PH')
                    ->get() as $status){
                        if($status->status_PH == 'Provisionert'){ $hausprov++;}
                        elseif($status->status_PH == 'Offen') { $hausoffen++;}
                        elseif($status->status_PH == 'Aufgenomen') { $hausauf++;}
                    }
                    foreach(DB::table('family_person')
                    ->join('leads','family_person.leads_id','leads.id')
                    ->where('leads.assign_to_id',Auth::user()->id)
                    ->join('costumer_produkt_rechtsschutz','costumer_produkt_rechtsschutz.person_id_PR','family_person.id')
                    ->select('costumer_produkt_rechtsschutz.status_PR')
                    ->get() as $status){
                        if($status->status_PR == 'Provisionert'){ $rechprov++;}
                        elseif($status->status_PR == 'Offen') { $rechoffen++;}
                        elseif($status->status_PR == 'Aufgenomen') { $rechauf++;}
                    }
                    foreach(DB::table('family_person')
                    ->join('leads','family_person.leads_id','leads.id')
                    ->where('leads.assign_to_id',Auth::user()->id)
                    ->join('costumer_produkt_vorsorge','costumer_produkt_vorsorge.person_id_PV','family_person.id')
                    ->select('costumer_produkt_vorsorge.status_PV')
                    ->get() as $status){
                 
                        if($status->status_PV == 'Provisionert'){ $vorsprov++;}
                        elseif($status->status_PV == 'Offen') { $vorauf++;}
                        elseif($status->status_PV == 'Aufgenomen') { $vorauf++;}
                    }
                    $provisionertCount = $vorsprov + $rechprov + $hausprov + $zusaprov + $autoprov + $grundprov;
                    $offenCount = $voroff + $rechoffen + $hausoffen + $zusaoffen + $autoffen + $grundoffen;
                    $aufgenomenCount = $vorauf + $rechauf + $hausauf + $zusauf + $autoauf + $grundauf;
                    
$fc = family::count();
                    if($fc > 0){
                        $fmcount = (100 / $fc) * $provisionertCount;
                    } 
                    else{
                        $fmcount = 0;
                    }
   
                    $counterat = [
                        'provisionertCount' => $provisionertCount,
                        'offenCount' => $offenCount,
                        'aufgenomenCount' => $aufgenomenCount,
                        'familyCount' => $fmcount
                    ];
                    return view('dashboard', compact('done','tasks','pending','leadscount', 'todayAppointCount', 'percnt','pendencies','pendingcnt','counterat'));
                }
                elseif(Auth::guard('admins')->user()->hasRole('backoffice')) {
                    return view('dashboard', compact('pendencies','morethan30'));
                }
                elseif (Auth::guard('admins')->user()->hasRole('salesmanager') ){

                    $personalApp = PersonalAppointment::where('user_id',Auth::user()->id)->where('AppOrCon',1)->get();
                    $consultation = PersonalAppointment::where('user_id',Auth::user()->id)->where('AppOrCon',2)->get();

                    $countpersonalApp = PersonalAppointment::where('user_id',Auth::user()->id)->where('AppOrCon',1)->count();
                    $countconsultation = PersonalAppointment::where('user_id',Auth::user()->id)->where('AppOrCon',2)->count();

                    $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();


                    $personalApp = PersonalAppointment::where('AppOrCon',1)->where('assignfrom',Auth::user()->id)->get();
                    $countpersonalApp = PersonalAppointment::where('AppOrCon',1)->where('assignfrom',Auth::user()->id)->count();
                    $admins = Admins::all();
                    $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();


           
                    return view('dashboard', compact('personalApp','consultation','done','tasks','pending','leadscount', 'todayAppointCount', 'percnt','pendencies','pendingcnt','morethan30','recorded','countpersonalApp','countconsultation'));

                }
                elseif(Auth::guard('admins')->user()->hasRole('admin')) {
                    $personalApp = PersonalAppointment::where('AppOrCon',1)->where('assignfrom',Auth::user()->id)->get();
                    $countpersonalApp = PersonalAppointment::where('AppOrCon',1)->where('assignfrom',Auth::user()->id)->count();
                    $admins = Admins::all();
                    $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();


                    
                    $grundversicherungP = CostumerProduktGrundversicherung::where('status_PG', 'Provisionert')->count();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('status_PR', 'Provisionert')->count();
                    $vorsorgeP = CostumerProduktVorsorge::where('status_PV', 'Provisionert')->count();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('status_PZ', 'Provisionert')->count();
                    $autoversicherungP = CostumerProduktAutoversicherung::where('status_PA', 'Provisionert')->count();
                    $hausratP = CostumerProduktHausrat::where('status_PH', 'Provisionert')->count();

                    $provisionertCount = $grundversicherungP + $retchsschutzP + $vorsorgeP + $zusatzversicherungP + $autoversicherungP + $hausratP;

                    $grundversicherungP = CostumerProduktGrundversicherung::where('status_PG', 'Offen')->count();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('status_PR', 'Offen')->count();
                    $vorsorgeP = CostumerProduktVorsorge::where('status_PV', 'Offen')->count();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('status_PZ', 'Offen')->count();
                    $autoversicherungP = CostumerProduktAutoversicherung::where('status_PA', 'Offen')->count();
                    $hausratP = CostumerProduktHausrat::where('status_PH', 'Offen')->count();

                    $offenCount = $grundversicherungP + $retchsschutzP + $vorsorgeP + $zusatzversicherungP + $autoversicherungP + $hausratP;

                    $grundversicherungP = CostumerProduktGrundversicherung::where('status_PG', 'Aufgenomen')->count();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('status_PR', 'Aufgenomen')->count();
                    $vorsorgeP = CostumerProduktVorsorge::where('status_PV', 'Aufgenomen')->count();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('status_PZ', 'Aufgenomen')->count();
                    $autoversicherungP = CostumerProduktAutoversicherung::where('status_PA', 'Aufgenomen')->count();
                    $hausratP = CostumerProduktHausrat::where('status_PH', 'Aufgenomen')->count();

                    $aufgenomenCount = $grundversicherungP + $retchsschutzP + $vorsorgeP + $zusatzversicherungP + $autoversicherungP + $hausratP;
                    if(family::count() > 0){
$fmcount =  (100 / family::count()) * $provisionertCount;
                    } 
                    else{
                        $fmcount = 0;
                    }
   
                    $counterat = [
                        'provisionertCount' => $provisionertCount,
                        'offenCount' => $offenCount,
                        'aufgenomenCount' => $aufgenomenCount,
                        'familyCount' => $fmcount
                    ];





                    return view('dashboard', compact('done','admins','counterat','personalApp','tasks','pending','leadscount', 'todayAppointCount', 'percnt','pendencies','pendingcnt','morethan30','recorded','countpersonalApp'));
                }

        }
    }

    public function addnewuser()
    {
        if (Auth::guard('admins')->user()->hasRole('admin')) {
            $roles = Role::all();
            return view('addnewuser', compact('roles'));
        }
    }

    public function registernewuser(Request $request)
    {
        $admins = new Admins();

        $admins->name = filter_var($request->user_name,FILTER_SANITIZE_STRING);
        $admins->email = filter_var($request->user_email,FILTER_SANITIZE_STRING);
        $admins->phonenumber = filter_var($request->user_name,FILTER_SANITIZE_STRING);
        $admins->password = Hash::make($request->user_password);

        $admins->assignRole(filter_var($request->role_name,FILTER_SANITIZE_STRING));

        if ($admins->save()) {
            return redirect()->back()->with('success', 'User Register Successfuly');
        } else {
            return redirect()->back()->with('fail', 'User Faild To Register');
        }
    }
}
