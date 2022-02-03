<?php

namespace App\Http\Controllers;
use App\Models\PersonalAppointment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Flash;
use Auth;
use App\Models\Admins;

use App\Models\lead;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AppointmentsController extends Controller
{

    public function index()
    {
		//Appointments = Appointment:selct("*")->
		if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager'))
		{
			$users= admins::select('*','admins.id as id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'admins.id')
			->where('model_has_roles.role_id',1)
			->get();
			$appointments_events = lead::select('*')->where('assign_to_id',0)->where('appointment_date',Carbon::now()->format('Y-m-d'))->get();
			$appointments = lead::select('*','leads.id as id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'leads.assign_to_id')
			->where('model_has_roles.role_id',1)->where('leads.assign_to_id','<>',0)->where('leads.assigned',1)->whereNotNull('leads.appointment_date')->get();

			return view('appointment')->with('users',$users)->with('appointments_events',$appointments_events)->with('appointments',$appointments);
		}else{

            $users="";$appointments_events ="";
			$appointments = lead::select('*')->where('assign_to_id',auth::guard('admins')->user()->id)->whereNotNull('appointment_date')->get();
            $maps = DB::table('leads')->where('appointment_date',Carbon::now()->format('Y-m-d'))->where('assign_to_id', \Illuminate\Support\Facades\Auth::guard('admins')->user()->id)->select('leads.first_name','leads.last_name','leads.latitude','leads.longitude')->get();
            $personalApp = PersonalAppointment::where('user_id', Auth::guard('admins')->user()->id)->where('AppOrCon', 1)->get();
            $countpersonalApp = PersonalAppointment::where('user_id', Auth::guard('admins')->user()->id)->where('AppOrCon', 1)->count();

            return view('appointment')
                ->with('users',$users)
                ->with('appointments_events',$appointments_events)
                ->with('appointments',$appointments)
                ->with('personalApp',$personalApp)
                ->with('maps',$maps)
                ->with('countpersonalApp', $countpersonalApp);



		}
	}

	public function Dropajax(Request $request)
    {
		$input = $request->all();
		$pieces = explode("-", $input['nom_lead']);
		$id_lead = $pieces['0'];
		$appointment = lead::where('id', $pieces['0'])
              ->update(['assigned' => 1,'assign_to_id' => $input['id_user'] ,'time' => $input['time']]);
		if($appointment){return "Assigned with success !!!!";} else {return "ERROR !!!";}


	//echo("ajax OK == ".$id_lead."-----".$input['id_user']);

	}
	public function changeTS(Request $request){
		echo "hello";
		$input = $request->all();
		$appointment = lead::where('id', $input['id_lead_input'])
              ->update(['appointment_date' =>  $input['date_new'],'assign_to_id' => $input['ts_id'] ,'time' => $input['time_new']]);

		if($appointment){session(['msg' => 'Success !!!!']);  return redirect()->back();} else {return "ERROR !!!";}
	}
}
