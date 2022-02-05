<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Flash;
use Auth;
use App\Models\Admins;

use App\Models\lead;
use Carbon\Carbon;
use DB;

class AppointmentsController extends Controller
{   

    public function index(Request $request)
    {
		$input = $request->all();
		if(array_key_exists('trie', $input) && ( $input['trie'] == "asc" || $input['trie']== "desc" )){$trie = $input['trie'];}else{$trie = "asc" ;};
		
		
		if(array_key_exists('region', $input) ){if($input['region'] == "all"){$regionQ='assign_to_id' ; $regionI = 0 ; $regionO="all";}else{$regionQ='city' ; $regionI  = $input['region'];$regionO= $input['region'] ;}}else{ $regionQ='assign_to_id' ; $regionI = "0" ;$regionO="all";};
		
		if(array_key_exists('rejected', $input) ){if($input['rejected'] == "all"){$rejectedQ='assign_to_id' ; $rejectedI = 0 ;$rejectedO="all";}else{$rejectedQ='rejected' ; $rejectedI = $input['rejected'];$rejectedO=$input['rejected'];}}else{ $rejectedQ='assign_to_id' ; $rejectedI = "0" ;$rejectedO="all";};
		
		if(array_key_exists('sprache', $input) ){if($input['sprache'] == "all"){$spracheQ='assign_to_id' ; $spracheI = 0 ; $spracheO="all"; }else{$spracheQ='sprache' ; $spracheI = $input['sprache']; $spracheO=$input['sprache']; }}else{ $spracheQ='assign_to_id' ; $spracheI = "0" ;$spracheO="all";};
		
		
		if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager'))
		{
			$users= admins::select('*','admins.id as id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'admins.id')
			->where('model_has_roles.role_id',7)
			->get();
			
			$regions = lead::select('city')->where('assign_to_id',0)->distinct()->orderBy('city', 'asc')->where('appointment_date',Carbon::now()->format('Y-m-d'))->get();
			$langues = lead::select('sprache')->where('assign_to_id',0)->distinct()->orderBy('sprache', 'asc')->whereNotNull('sprache')->where('appointment_date',Carbon::now()->format('Y-m-d'))->get();
			
			//$langues = DB::table('leads')->select('sprache')->where('assign_to_id',0)->distinct()->orderBy('sprache', 'asc')->get();
			
			$appointments_events = lead::select('*')->where('assign_to_id',0)->where('appointment_date',Carbon::now()->format('Y-m-d'))->orderBy('time', $trie)->where($regionQ,$regionI)->where($rejectedQ,$rejectedI)->where($spracheQ,$spracheI)->get();
			$appointments = lead::select('*','leads.id as id')->join('model_has_roles', 'model_has_roles.model_id', '=', 'leads.assign_to_id')
			->where('model_has_roles.role_id',7)->where('leads.assign_to_id','<>',0)->where('leads.assigned',1)->whereNotNull('leads.appointment_date')->get(); 
			
			return view('appointment')->with('users',$users)->with('appointments_events',$appointments_events)->with('appointments',$appointments)->with('regions',$regions)->with('langues',$langues)->with('regionO',$regionO)->with('rejectedO',$rejectedO)->with('spracheO',$spracheO)->with('trie',$trie);
		}else{
			$users="";$appointments_events = "";
			$regions ="";
			$langues = "";
			$appointments = lead::select('*')->where('assign_to_id',auth::guard('admins')->user()->id)->whereNotNull('appointment_date')->get();
			
			return view('appointment')->with('users',$users)->with('appointments_events',$appointments_events)->with('appointments',$appointments)->with('regions',$regions)->with('langues',$langues)->with('regionO',$regionO)->with('rejectedO',$rejectedO)->with('spracheO',$spracheO)->with('trie',$trie);
			
			
			   
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
	public function changeFilter(Request $request){
		
		
		
	}
		
		
	public function changeTS(Request $request){
	
		$input = $request->all();
		$appointment = lead::where('id', $input['id_lead_input'])
              ->update(['appointment_date' =>  $input['date_new'],'assign_to_id' => $input['ts_id'] ,'time' => $input['time_new']]);
			  
		if($appointment){session(['msg' => 'Success !!!!']);  return redirect()->back();} else {return "ERROR !!!";}
	}
}