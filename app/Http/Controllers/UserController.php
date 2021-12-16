<?php

namespace App\Http\Controllers;

use App\Imports\LeadsImport;
use App\Models\Admins;
use App\Models\Deletedlead;
use App\Models\rejectedlead;
use App\Models\User;
use App\Mail\confirmcode;
use App\Models\appointment;
use App\Models\campaigns;
use App\Models\chat;
use App\Models\Costumer;
use App\Models\family;
use App\Models\lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Nexmo;
use Illuminate\Support\Str;



class UserController extends Controller
{
    public function rnlogin(){
        if(!Auth::guard('admins')->check()){
        return view('login');}
        else{
            return redirect()->route('dashboard');
        }
    }

    public function getlead($campaign){
         $campaign = campaigns::where('name',$campaign)->get();
        return view('getlead',compact('campaign'));
    }
    public function joined(Request $req){
        $req->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'postal' => 'required',
            'location' => 'required',
            'campaign' => 'exists:campaigns,id'
        ]);
        $lead = new lead();
        $lead->name = filter_var($req->input('fname'),FILTER_SANITIZE_STRING);
        $lead->lname = filter_var($req->input('lname'),FILTER_SANITIZE_STRING);
        $lead->telprivat = filter_var($req->input('phone'),FILTER_SANITIZE_STRING);
        $lead->address = filter_var($req->input('address'),FILTER_SANITIZE_STRING);
        $lead->postcode = filter_var($req->input('postal'),FILTER_SANITIZE_STRING);
        $lead->location = filter_var($req->input('location'),FILTER_SANITIZE_STRING);
        $lead->nationality = filter_var($req->input('country'),FILTER_SANITIZE_STRING);
        $lead->day = Carbon::now()->dayName;
        $lead->count = (int) $req->input('count');
        $lead->campaign_id = (int) $req->input('campaign');
        $campaign = campaigns::where('id',$req->input('campaign'))->get();
        if($req->input('online') == 'yes'){
            $lead->wantsonline = 1;
            $lead->assigned = 1;
        }
        else{
            $lead->wantsonline = 0;
        }

        if($lead->save()){
            $lead->slug = Str::slug($req->input('fname')).'-'.$lead->id;
            $lead->save();
            return redirect()->route('getlead',$campaign[0]->name)->with('joined','You joined successfully, our team will try to contact you as soon as possible!');
        }



    }

    public function importexcel(Request $req){

            Excel::import(new LeadsImport, $req->file('file')->store('temp'));
            return 'Po';

    }
    public function addappointment(Request $req){
    $req->validate([
        'fname' => 'required',
        'lname' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'postal' => 'required',
        'location' => 'required',
        'country' => 'required',
        'count' => 'required',
        'admin' => 'exists:admins,id',
        'appdate' => 'required'

    ]);

        $lead = new lead();

        $lead->name = filter_var($req->input('fname'),FILTER_SANITIZE_STRING);
        $lead->lname = filter_var($req->input('lname'),FILTER_SANITIZE_STRING);
        $lead->telprivat = filter_var($req->input('phone'),FILTER_SANITIZE_STRING);
        $lead->address = filter_var($req->input('address'),FILTER_SANITIZE_STRING);
        $lead->postcode = (int) $req->input('postal');
        $lead->location = filter_var($req->input('location'),FILTER_SANITIZE_STRING);
        $lead->nationality = filter_var($req->input('country'),FILTER_SANITIZE_STRING);
        $lead->day = Carbon::now()->dayName;
        $lead->count = (int) $req->input('count');

        $lead->appointmentdate = filter_var($req->input('appdate'),FILTER_SANITIZE_STRING);
        if($req->input('online') == 'yes'){
            $lead->wantsonline = 1;
            $lead->assigned = 1;
        }
        else{
            $lead->admin_id = (int) $req->input('admin');
            $lead->wantsonline = 0;
        }
        if($lead->save()){
            $lead->slug = Str::slug($req->input('fname')).'-'.$lead->id;
            $lead->save();
            return redirect()->route('insertappointment')->with('joined','Appointment was made successfully!');
        }

    }

    public function dates($page = 1){
        if(Auth::guard('admins')->check()){
            if(Auth::guard('admins')->user()->role == 'salesmenager' || Auth::guard('admins')->user()->role == 'admin'){
                $datesforconversation = lead::where('completed',0)->where('wantsonline',0)->where('assigned',1)->get();
            }

            elseif (Auth::guard('admins')->user()->role == 'digital'){
            $datesforconversation = lead::where('wantsonline',1)->where('completed',0)->paginate(7);
            }
            return view('dates',compact('datesforconversation'));
        }
        else{
            return abort(403);
        }
    }

    public function dlead($id){
     //   lead::where('id',$id)->delete();
        $leads = lead::find($id);
        return view('deletedlead',compact('leads'));
    }
    public function deletedlead(Request $request,$id){
        $leads = lead::find($id);
        $deletedlead = new Deletedlead();

        $deletedlead->name = $leads->name;
        $deletedlead->count = $leads->count;
        $deletedlead->date = $leads->created_at;
        $deletedlead->reason = $request->reason;
        $deletedlead->comment = $request->comment;
        $deletedlead->address = $leads->address;

        $deletedlead->save();

        $leads->delete();
        return redirect()->route('leads')->with('success','Lead Deleted Successfuly');

    }




  public function insertappointment(){
      $admins = Admins::all();
      return view('insterappointment',compact('admins'));
  }


    public function leads($page = 1){
        if(Auth::guard('admins')->check() && Auth::guard('admins')->user()->role != 'backoffice' && Auth::guard('admins')->user()->role != 'finance'){
            if(Auth::guard('admins')->user()->role == 'admin' || Auth::guard('admins')->user()->role == 'salesmenager' || Auth::guard('admins')->user()->role == 'menagment'){
                $leads = lead::where('completed','0')->where('assigned',0)->paginate(8);
            }
            elseif(Auth::guard('admins')->user()->role == 'digital'){
                 $leads = lead::where('admin_id',Auth::guard('admins')->user()->id)->where('completed','0')->where('wantsonline',1)->paginate(7);

            }

            return view('leads',compact('leads'));
        }
        else{
            return abort('403');
        }
    }

    public function asignlead(Request $req,$id){
        $req->validate([
            'admin' => "required|exists:admins,id",

        ]);
          $lead = lead::find($id);
          $lead->admin_id = (int) $req->input('admin');
          $lead->assigned = 1;
          $lead->time = filter_var($req->input('apptime'),FILTER_SANITIZE_STRING);
          $lead->appointmentdate = filter_var($req->input('appointmentdate'),FILTER_SANITIZE_STRING);
          $lead->save();
          return redirect()->route('leads');
    }

    public function appointbyadmin($id){
        $lead = lead::find($id);
        return view('appointadmin',compact('lead'));

    }
    public function reject($id){
        $lead = lead::find($id);
        $lead->assigned = 0;
        $lead->save();
        return redirect()->route('');
    }
    public function alead($id){
        $admins = Admins::all();
        $lead = lead::find($id);

        return view('alead',compact('admins','lead'));
    }

    public function trylogin(Request $req){
        $email = filter_var($req->input('email'),FILTER_SANITIZE_STRING);
        $password = filter_var($req->input('password'),FILTER_SANITIZE_STRING);
        if(Auth::guard('admins')->attempt(['email' => $email,'password' => $password])){
            $pin = random_int(1000,9999);
            $user = Admins::find(Auth::guard('admins')->user()->id);
            $user->pin = $pin;

            // Nexmo::message()->send([
            // 'to' => '38345626643',
            // 'from' => '38345917726',
            // 'text' => '1234']);
            $user->save();
            \Mail::to(Auth::guard('admins')->user()->email)->send(new confirmcode($pin));
            return redirect()->route('dashboard');

        }


    }
    public function confirmcode(Request $req){
        $c1 = (int) $req->input('c1');
        $c2 = (int) $req->input('c2');
        $c3 = (int) $req->input('c3');
        $c4 = (int) $req->input('c4');
        $pin = $c1.$c2.$c3.$c4;
        $pin = (int) $pin;
        $user = Admins::find(Auth::guard('admins')->user()->id);
        if($pin === $user->pin){
            $user->confirmed = 1;
            $user->save();
            return redirect()->back();
        }
        else{
            return redirect()->back()->with('notauth','PIN war falsch');
        }

                }

                public function logout(){
                    if(Auth::guard('admins')->check()){
                        $perdoruesi = Admins::where('id',Auth::guard('admins')->user()->id)->first();
                        $perdoruesi->online = 0;
                        $perdoruesi->confirmed = 0;
                        $perdoruesi->save();
                        Auth::guard('admins')->logout();}
                        return redirect()->route('rnlogin');




                    return redirect()->route('home');
                }
     public function adduser(){
         $user= new Admins();
         $user->email = 'bulzarti@gmail.com';
         $user->password = Hash::make('123456');
         $user->name = "Bulzart";
         $user->role = 'sm';
         $user->save();

     }
     public function completeapp(Request $req,$id){

         $lead = lead::find($id);
         $app = new appointment();
         $app->name = filter_var($req->input('fname1'),FILTER_SANITIZE_STRING);
         $app->lname = filter_var($req->input('lname1'),FILTER_SANITIZE_STRING);
         $app->lead_id = $id;
         $app->birthday = filter_var($req->input('birthday1'),FILTER_SANITIZE_STRING);
        $cnt = $lead->count;
        $family = new family();
         for($i = 2; $i <= $cnt; $i++){

                 $family->addmember(filter_var($req->input('fname'.$i),FILTER_SANITIZE_STRING),filter_var($req->input('lname'.$i),FILTER_SANITIZE_STRING),filter_var($req->input('birthday'.$i),FILTER_SANITIZE_STRING));
         }
         $app->family = json_encode($family->members);
         $app->data = '{
            "job": null,
            "email": null,
            "kanton": "Zürich",
            "lenker": "Yes",
            "comment": null,
            "kmstand": null,
            "society": null,
            "insurance": "Example1",
            "carcomment": null,
            "preinsurer": {},
            "countryCode": "44",
            "leasingname": null,
            "nationality": null,
            "phonenumber": null,
            "yearpurchase": "2021",
            "deductionpart": null,
            "martialstatus": "Married",
            "numberofrooms": "1",
            "paymentrhythm": "Weekly",
            "thingscarried": null,
            "amountpermonth": null,
            "numberofpeople": "1",
            "startinsurance": null,
            "commentatpolice": null,
            "insuranceamount": null,
            "residencepermit": null,
            "contractstartdate": null,
            "firstcommissioning": null,
            "nationalityfinance": null,
            "employmentrelationship": "Coworkers",
            "wishedadditionalthings": null,
            "numberofpeopleinsurance": "1",
            "dateofissueofdriverslicense": null,
            "whichcompaniesshouldmakeanoffer": null
        }';

         $app->save();


     }
public function timenow(){
    return Carbon::now()->format('H:i:s');
}
     public function filterbydateapp(Request $req){
         $req->validate([
             'fbydate' => 'required'
         ]);

         $appointments = lead::where('appointmentdate',date('Y-m-d', strtotime($req->input('fbydate'))))->where('admin_id',Auth::guard('admins')->user()->id)->where('wantsonline',0)->get();

         $leadscount = lead::where('admin_id', null)->where('assigned',0)->get()->count();
         $todayAppointCount = lead::where('admin_id',Auth::guard('admins')->user()->id)->where('appointmentdate',Carbon::now()->toDateString())->where('wantsonline',0)->where('assigned',1)->get()->count();

         return view('dashboard',compact('appointments','leadscount','todayAppointCount'));
     }

     public function dealclosed($id){
         $app = lead::where('id',$id)->first();
         if($app->admin_id != 0 && $app->admin_id == Auth::guard('admins')->user()->id || Auth::guard('user')->user()->role == 'admin'){
         return view('completelead',compact('app'));}
         else{
             return redirect()->back();
         }
     }
     public function dealnotclosed($id){
        $leads = lead::where('id',$id)->first();
         if($leads->admin_id != 0 && $leads->admin_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->role == 'admin'){
             return view('rejectedleads',compact('leads'));}
         else{
             return redirect()->back();
         }
     }
    public function rejectedleads(Request $request){
        $leads_id = $request->leadsid;
        lead::where('id',$leads_id)->update(['admin_id'=> 0, 'assigned'=> 0]);

        $request->validate([
            'leadsid' =>'required',
            'reason' => 'required',
            'image' => 'required'
        ]);


        $user_id = Auth::guard('admins')->user()->id;

        $rejectedlead = new rejectedlead();

        $rejectedlead->leads_id = $request->leadsid;
        $rejectedlead->admin_id = $user_id;
        $rejectedlead->reason = $request->reason;
        $rejectedlead->image = 'img/'. $request->file('image')->getClientOriginalName();

        $rejectedlead->save();

        $img = Image::make($request->file('image'));
        $img->save('img/'.$request->file('image')->getClientOriginalName());

        return redirect()->back()->with('success','U ruajt me sukses');
    }

     public function dashboard(){
        date_default_timezone_set('Europe/Berlin');

        $some_date = Carbon::now()->format('H:i');
        $now = (int) str_replace(':','',$some_date);

          if($now > 2300){
            $appointments = lead::where('admin_id',Auth::guard('admins')->user()->id)->where('assigned',1)->where('wantsonline',0)->where('appointmentdate',Carbon::now()->addDays()->toDateString())->get();}
        else{

            $appointments = lead::where('admin_id',Auth::guard('admins')->user()->id)->where('assigned',1)->where('wantsonline',0)->where('appointmentdate',Carbon::now()->toDateString())->get();

        }
         $leadscount = lead::where('admin_id', null)->where('assigned',0)->get()->count();
         $todayAppointCount = lead::where('admin_id',Auth::guard('admins')->user()->id)->where('appointmentdate',Carbon::now()->toDateString())->where('wantsonline',0)->where('assigned',1)->get()->count();

         return view('dashboard',compact('appointments', 'leadscount','todayAppointCount'));
     }
}
