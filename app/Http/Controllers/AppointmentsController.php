<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Flash;
use Auth;
use App\Models\Admins;

use App\Models\lead;
use Carbon\Carbon;


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
			$appointments = lead::select('*')->where('assign_to_id','<>',0)->where('assigned',1)->where('appointment_date',Carbon::now()->format('Y-m-d'))->where('wantsonline',0)->get();
			
			return view('appointment')->with('users',$users)->with('appointments_events',$appointments_events)->with('appointments',$appointments);
		}else{
			$users="";$appointments_events ="";
			$appointments = lead::select('*')->where('assign_to_id',auth::guard('admins')->user()->id)->where('appointment_date',Carbon::now()->format('Y-m-d'))->where('wantsonline',0)->get();
			
			return view('appointment')->with('users',$users)->with('appointments_events',$appointments_events)->with('appointments',$appointments);
			
			
			
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
}