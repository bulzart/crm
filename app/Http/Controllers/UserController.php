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
use Illuminate\Auth\Access\Response;

class UserController extends Controller
{
    // public function __construct(){
    //     $this->middleware(confirmedcode::class);
    // }
    public function closenots()
    {
        notification::where('receiver_id', Auth::guard('admins')->user()->id)->update(['done' => 1]);

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
        $notcnt = notification::where('receiver_id', Auth::guard('admins')->user()->id)->where('done', 0)->get()->count();
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
            'apptime' => 'required',
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
            return redirect()->back()->with('joined', 'You joined successfully, our team will try to contact you as soon as possible!');
        } else {
            return redirect()->route('getlead')->with('fail', 'Your joined fail');
        }
    }


    public function dlead($id)
    {
        //   lead::where('id',$id)->delete();
        $leads = lead::find($id);
        return view('deletedlead', compact('leads'));
    }

    public function deletedlead(Request $request, $id)
    {
        
        $leads = lead::find($id);
if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || $leads->assign_to_id == Auth::guard('admins')->user()-id){
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
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);
        $file = $request->file('file');

        \Maatwebsite\Excel\Facades\Excel::import(new LeadImport, $file);

    }


    public function insertappointment()
    {
        $admins = Admins::all();
        return view('insterappointment', compact('admins'));
    }


    public function leads()
    {
        if (!Auth::guard('admins')->check()) {
            return abort('403');
        } else {
            $asigned = [];
            if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('backoffice')) {
                $leads = lead::where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->get();
                $asigned = lead::where('completed', '0')->where('assigned', 0)->whereNotNull('assign_to_id')->get();

            } elseif (Auth::guard('admins')->user()->hasRole('fs')) {
                $leads = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('assigned', 0)->get();
            }

            $insta = lead::where('campaign_id', 1)->get()->count();
            $facebook = lead::where('campaign_id', 3)->get()->count();
            $sana = lead::where('campaign_id', 2)->get()->count();
            $total = array('instagram' => $insta, 'facebook' => $facebook, 'sana' => $sana);
            return view('leads', compact('leads', 'total', 'asigned'));

        }
    }

    public function asignlead(Request $req, $id)
    {
        $req->validate([
            'admin' => "required|exists:admins,id",
        ]);
        $lead = lead::find($id);
        $lead->assign_to_id = (int)$req->input('admin');
        $lead->time = filter_var($req->input('apptime'), FILTER_SANITIZE_STRING);
        $lead->appointment_date = filter_var($req->input('appointmentdate'), FILTER_SANITIZE_STRING);
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


                $role = Role::where('name',$req->input('auth'))->get();
                $rolee = $user->getRoleNames();
             
              if($rolee[0] != null){
                $user->removeRole($rolee[0]);
                $user->assignRole($role);}
            
                //  Nexmo::message()->send([
                //  'to' => '38345626643',
                //  'from' => 'VONAGE APIs',
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

    public function adduser()
    {
        $user = new Admins();
        $user->email = 'bulzarti@gmail.com';
        $user->password = Hash::make('123456');
        $user->name = "Bulzart";
        $user->role = 'sm';
        $user->save();
    }

    public function completeapp(Request $req, $id)
    {
        $lead = lead::find($id);

        $cnt = $lead->number_of_persons;
        for ($i = 1; $i <= $cnt; $i++) {
            $family = new family();
            $family->first_name = filter_var($req->input('fname' . $i));
            $family->birthdate = filter_var($req->input('birthday' . $i));
            $family->last_name = filter_var($req->input('lname' . $i));
            $family->leads_id = (int)$id;
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
        lead::where('id', $leads_id)->update(['admin_id' => 0, 'assigned' => 0]);


        $user_id = Auth::guard('admins')->user()->id;

        $rejectedlead = new rejectedlead();

        $rejectedlead->leads_id = $request->leadsid;
        $rejectedlead->reason = $request->reason;
        $rejectedlead->image = 'img/' . $request->file('image')->getClientOriginalName();

        if ($rejectedlead->save()) {
            $img = Image::make($request->file('image'));
            $img->save('img/' . $request->file('image')->getClientOriginalName());
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



            date_default_timezone_set('Europe/Berlin');



            if (Auth::guard('admins')->check()) {
                $pendingcnt = 0;
                $opencnt = 0;
                $done = 0;
                $tasks = null;
                $pendencies = [];
                if (Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('admin')) {
                    $pendencies = family::where('status', 'Submited')->get();

                    $morethan30 = '';
                    $morethan30 = family::where('status','Submited')->where('status_updated_at','<',Carbon::now()->subDays(29)->format('Y-m-d'))->get();

                }

    if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')){
        $tasks = lead::where('completed',0)->get();

                    $pendingcnt = DB::table('family_person')
                    ->join('pendencies','family_person.id','=','pendencies.family_id')
                    ->where('pendencies.done','=',0)
                    ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
                    ->count();
            }
            elseif(Auth::guard('admins')->user()->hasRole('fs')){
             $tasks = lead::where('assign_to_id',Auth::guard('admins')->user()->id)->where('completed',0)->get();
             $pendingcnt = DB::table('family_person')
                ->join('pendencies','family_person.id','=','pendencies.family_id')
                ->where('pendencies.done','=',0)
                ->where('pendencies.admin_id','=',Auth::guard('admins')->user()->id)
                ->select('family_person.first_name as first_name','family_person.last_name as last_name','pendencies.*','family_person.id as id')
                ->count();
        }

            for ($i = 0; $i < count($tasks); $i++) {
                    if ($tasks[$i]->status_task == 'Open') {
                        $opencnt++;
                    }
                    if ($tasks[$i]->status_task == 'Done') {
                        $done++;
                    }
            }

                $percnt = 0;
                $taskcnt = count($tasks);
                if($taskcnt != 0){
                    $percnt = (100 / $taskcnt) * $done;
                }

                $leadscount = lead::where('assign_to_id', null)->where('assigned', 0)->get()->count();
                $todayAppointCount = lead::where('assign_to_id', Auth::guard('admins')->user()->id)->where('appointment_date', Carbon::now()->toDateString())->where('wantsonline', 0)->where('assigned', 1)->get()->count();
                if(Auth::guard('admins')->user()->hasRole('fs')) return view('dashboard', compact('leadscount', 'todayAppointCount', 'opencnt', 'pendingcnt', 'percnt'));
                if(Auth::guard('admins')->user()->hasRole('backoffice')) return view('dashboard', compact('pendencies','morethan30'));
                if(Auth::guard('admins')->user()->hasRole('admin')) return view('dashboard', compact('leadscount', 'todayAppointCount', 'opencnt', 'pendingcnt', 'percnt','pendencies','morethan30'));
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

        $admins->name = $request->user_name;
        $admins->email = $request->user_email;
        $admins->phonenumber = $request->user_name;
        $admins->password = Hash::make($request->user_password);

        $admins->assignRole($request->role_name);

        if ($admins->save()) {
            return redirect()->back()->with('success', 'User Register Successfuly');
        } else {
            return redirect()->back()->with('fail', 'User Faild To Register');
        }
    }
}
