<?php

namespace App\Http\Controllers;

use App\Imports\LeadImport;
use App\Imports\LeadsImport;
use App\Imports\TestImport;
use App\Models\Admins;
use App\Models\Deletedlead;
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
use DB;
use Faker;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware(confirmedcode::class);
    }
    public function closenots()
    {
        notification::where('receiver_id', Auth::guard('admins')->user()->id)->update(['done' => 1]);
    }
    public function addslead(Request $req){
        $lead = new lead();
        $lead->first_name = filter_var($req->name,FILTER_SANITIZE_STRING);
        $lead->last_name = filter_var($req->lname,FILTER_SANITIZE_STRING);
        $lead->telephone = filter_var($req->phone,FILTER_SANITIZE_STRING);
        $lead->campaign_id = (int) $req->campaign;
        $lead->save();
        $lead->slug = 'qwesssewssew-' . uniqid();
        $lead->save();
        return redirect()->back()->with('success','Lead was succesfully inserted');
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
            'admin' => 'required|exists:admins,id',
            'appbirthdate' => 'required'
        ]);

        $lead = new lead();
        $lead->first_name = filter_var($req->input('fname'), FILTER_SANITIZE_STRING);
        $lead->last_name = filter_var($req->input('lname'), FILTER_SANITIZE_STRING);
        $lead->telephone = filter_var($req->input('phone'), FILTER_SANITIZE_STRING);
        $lead->address = filter_var($req->input('address'), FILTER_SANITIZE_STRING);
        $lead->postal_code = filter_var($req->input('postal'), FILTER_SANITIZE_STRING);
        $lead->city = filter_var($req->input('location'), FILTER_SANITIZE_STRING);
        $lead->nationality = filter_var($req->input('country'), FILTER_SANITIZE_STRING);
        $lead->appointment_date = filter_var($req->input('appdate'), FILTER_SANITIZE_STRING);
        $lead->time = filter_var($req->input('apptime'), FILTER_SANITIZE_STRING);
        $lead->birthdate = filter_var($req->input('appbirthdate'), FILTER_SANITIZE_STRING);
        $lead->number_of_persons = (int)$req->input('count');
        $lead->campaign_id = (int)$req->input('campaign');
        $campaign = campaigns::where('id', $req->input('campaign'))->get();
        if ($req->input('online') == 'yes') {
            $lead->wantsonline = 1;
            $lead->assigned = 1;
        } else {
            $lead->wantsonline = 0;
            if (Auth::guard('admins')->user()->hasRole('fs')){
                $lead->assign_to_id = Auth::guard('admins')->user()->id;
            }else{
                $lead->assign_to_id = $req->input('admin');
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
            $lead->slug = Str::slug($req->input('first_name')) . '-' . $lead->id;

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

        if (!Auth::guard('admins')->check()) {
            return abort('403');
        }
        elseif(Auth::user()->hasRole('backoffice')){
            return redirect()->back();
        } 
        else {
            $asigned = [];
            if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager')) {
                $leads = lead::where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->paginate(200);
                $asigned = lead::where('completed', '0')->where('assigned', 0)->whereNotNull('assign_to_id')->paginate(200);
            } elseif (Auth::guard('admins')->user()->hasRole('fs')) {
                $leads = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('assigned', 0)->paginate(25);
            }
          
      

            $insta = DB::table('leads')->where('campaign_id', 1)->count();

            $facebook = DB::table('leads')->where('campaign_id', 3)->count();
            $sana = DB::table('leads')->where('campaign_id', 2)->count();

            $total = array('instagram' => $insta, 'facebook' => $facebook, 'sana' => $sana);
            $admins = Admins::role('fs')->get();

            return view('leads', compact('leads', 'total', 'asigned','admins'));

        }
    }

    public function asignlead(Request $req, $id)
    {
           
        $req->validate([
            'count' => 'required',
            'apptime' => 'required',
            'appointmentdate' => 'required'
        ]);


        $lead = lead::find($id);
        $lead->address = $req->address ? $req->address : $lead->address;
        $lead->assign_to_id = Auth::user()->id;
        $lead->telephone = $req->telephone ? $req->telephone : $lead->telephone;
        $lead->campaign_id = campaigns::where('name',$req->source)->firstOrFail() ? campaigns::where('name',$req->source )->firstOrFail()->id : 0;
        $lead->time = filter_var($req->input('apptime'), FILTER_SANITIZE_STRING);
        $lead->postal_code = $req->zip ? $req->zip : $lead->postal_code;
        $lead->first_name = $req->name ? $req->name : $lead->first_name;
        $lead->number_of_persons = $req->count ? $req->count :  $lead->number_of_people;
        $lead->appointment_date =  filter_var($req->input('appointmentdate'), FILTER_SANITIZE_STRING);
        $lead->assigned = 1;
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
            $family = new family();
            $family->first_name = filter_var($req->input('fname' . $i));
            $family->birthdate = filter_var($req->input('birthday' . $i));
            $family->last_name = filter_var($req->input('lname' . $i));
            $family->leads_id = (int)$idd;
            $family->status = "Open";
          $family->save();
        }
        $lead->status_task = "open";
    $lead->save();

        return redirect()->back()->with('success', 'Action was successfull!');
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
        if ($app->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin')) {
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

    public function rejectedleads(Request $request)
    {
        $request->validate([
            'leadsid' => 'required',
            'reason' => 'required',
            'image' => 'required'
        ]);
        $leads_id = $request->leadsid;
        lead::where('id', $leads_id)->update(['assign_to_id' => null, 'assigned' => 0]);


        $user_id = Auth::user()->id;

        $rejectedlead = new rejectedlead();

        $rejectedlead->leads_id = $request->leadsid;
        $rejectedlead->reason = $request->reason;
        $rejectedlead->image = 'img/' . $request->file('image')->getClientOriginalName();

        if ($rejectedlead->save()) {

          Storage::disk('img')->putFileAs('',$request->file('image'),$rejectedlead->image);
            return redirect()->back()->with('success', 'Action was done successfully');
        } else {
            return redirect()->back()->with('fail', 'Action failed');
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
                    if(Auth::guard('admins')->user()->hasRole('fs')) $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 0)->where('assigned', 1)->get()->count();
                    else $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 1)->where('assigned', 1)->get()->count();
                     return view('dashboard', compact('done','tasks','pending','leadscount', 'todayAppointCount', 'percnt','pendencies','pendingcnt'));
                }
                elseif(Auth::guard('admins')->user()->hasRole('backoffice')) {
                    return view('dashboard', compact('pendencies','morethan30'));
                }
                elseif (Auth::guard('admins')->user()->hasRole('salesmanager')){



                    $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();
                    return view('dashboard', compact('done','tasks','pending','leadscount', 'todayAppointCount', 'percnt','pendencies','pendingcnt','morethan30','recorded'));

                }
                elseif(Auth::guard('admins')->user()->hasRole('admin')) {
                    $todayAppointCount = lead::where('appointment_date', Carbon::now()->toDateString())->where('assigned', 1)->count();
                    return view('dashboard', compact('done','tasks','pending','leadscount', 'todayAppointCount', 'percnt','pendencies','pendingcnt','morethan30','recorded'));
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
