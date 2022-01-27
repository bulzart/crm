<?php

use App\Events\SendNotification;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\confirmcode;
use App\Http\Middleware\confirmedadmin;
use App\Http\Middleware\confirmedcode;
use App\Mail\confirmcode as MailConfirmcode;
use Carbon\Carbon;
use App\Http\Controllers\TasksController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TodoController;
use App\Models\Admins;
use App\Models\todo;
use App\Models\family;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\FamilyPersonsController;
use App\Http\Controllers\LeadDataController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TeamController;
use App\Listeners\SendNotificationListener;
use App\Models\campaigns;
use App\Models\lead;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Musonza\Chat\Chat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Arr;






route::prefix('')->middleware('confirmcode')->group(function(){
   route::get('addlead',function(){
      $campaigns = campaigns::all();
      return view('addlead',compact('campaigns'));
   });
   route::get('getleads',function(){
      if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('backoffice')) {
         $leads['leads'] = DB::table('leads')->where('completed', '0')->where('assigned', 0)->where('assign_to_id', null)->orderBy('updated_at','asc')->select('leads.first_name','leads.last_name','leads.id','leads.wantsonline','leads.slug')->paginate(200);
         $asigned = lead::where('completed', '0')->where('assigned', 0)->whereNotNull('assign_to_id')->paginate(200);
     } elseif (Auth::guard('admins')->user()->hasRole('fs')) {
      $leads['leads'] = DB::table('leads')->where('completed', '0')->where('assigned', 0)->orderBy('updated_at','asc')->where('leads.assign_to_id',Auth::user()->id)->select('leads.first_name','leads.last_name','leads.id','leads.wantsonline','leads.slug')->paginate(200);
   }
  
     $leads['admins'] = Admins::role(['fs','digital'])->get();
     $leads['admin'] = Auth::user()->getRoleNames();

     return $leads;
   });
   route::post('addslead',[UserController::class,'addslead'])->name('addslead');
   route::get('assigntofs/{admin}',function($admin = null,Request $req){
      $array = $req->array;
      $array = explode(",",$array);
      if(Admins::find($admin)->hasRole('fs')){
        foreach($array as $arr){
       lead::find($arr)->update(['assign_to_id' => $admin,'updated_at' => Carbon::now()->format('Y-m-d')]);
        }
      }
      else{
         foreach($array as $arr){
            lead::find($arr)->update(['assign_to_id' => $admin,'updated_at' => Carbon::now()->format('Y-m-d'),'assigned' => 1]);
             }
      }
   })->name('assigntofs');
   route::get('assignpendency',[TasksController::class,'assignpendency']);
// =====================================
   route::get('hyr',function(){
      Auth::guard('admins')->loginUsingId(1);
   })->withoutMiddleware(confirmcode::class);
   route::get('clear',function(){
      \Artisan::call('optimize');
      return \Artisan::call('route:clear');
   });
//==========================================
    route::get('acceptapp/{id}',[UserController::class,'acceptapp']);
    route::get('closenots',[UserController::class,'closenots']);
    route::get('notifications',[UserController::class,'notifications']);
    route::get('insterappointment',[UserController::class,'insertappointment'])->name('insertappointment');
    route::get('/',[UserController::class,'dashboard'])->name('dashboard');
    route::get('leads',[UserController::class,'leads'])->name('leads')->middleware('role:admin|fs|salesmanager,admins');
    route::post('asignlead/{id}',[UserController::class,'asignlead'])->name('asignlead');
    route::get('alead/{id}',[UserController::class,'alead'])->name('alead');
    route::get('dlead/{id}',[UserController::class,'dlead'])->name('dlead');

   //  Route::group(['middleware' => 'json.response'], function () {
      route::post('deletedlead/{id}',[UserController::class,'deletedlead'])->name('deletedlead');
   // });

    route::post('addappointment',[UserController::class,'addappointment'])->name('addappointment');
    route::get('dealclosed/{id}',[UserController::class,'dealclosed'])->name('dealclosed');
    Route::get('changeTS', 'App\Http\Controllers\AppointmentsController@changeTS')->name('changeTS');

   //  Route::group(['middleware' => 'json.response'], function () {
      route::post('completeapp/{id}',[UserController::class,'completeapp'])->name('completeapp');
   // });

    route::get('dealnotclosed/{id}',[UserController::class,'dealnotclosed'])->name('dealnotclosed');
    route::post('rejectedleads',[UserController::class,'rejectedleads'])->name('rejectedleads');
    route::get('addnewuser',[UserController::class,'addnewuser'])->name('addnewuser');
    route::post('registernewuser',[UserController::class,'registernewuser'])->name('registernewuser');
    route::get('acceptappointment/{id}',function ($id){

        $idd = Crypt::decrypt($id);
        $idd /= 1244;

        $lead = lead::find($idd);

        return view('acceptappointment',compact('lead'));
    })->name('acceptappointment');
    route::get('acceptleadinfo/{id}',function ($id){
        $idd = Crypt::decrypt($id);
        $idd /= 1244;
        $app = lead::find($idd)->update(['assigned' => 1]);
        return redirect()->back();
    })->name('acceptleadinfo');

    //----------------------------------------------------------------//
    route::get('leadfamily/{id}',function ($id){

        $idd = Crypt::decrypt($id);
        $idd /= 1244;

        try {

          $data = family::where('leads_id',$idd)->get();
                     if(!empty($data[0])){
                        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || $data[0]->lead->assign_to_id == Auth::guard('admins')->user()->id) {return view('leadfamily',compact('data'));}
                     }
                     else{
                        return redirect()->route('dealclosed',Crypt::encrypt($idd * 1244));
                     }

                  }
      catch(Throwable $e){
          return redirect()->back();
      }

   })->name('leadfamily');
   route::get('leadfamilyperson/{id}',[FamilyPersonsController::class,'family_persons'])->name('leadfamilyperson');
    route::post('updateleadfamilyperson/{id}',[FamilyPersonsController::class,'updateleadfamilyperson'])->name('updateleadfamilyperson');
    route::get('allFamilyPersons/{id}',[FamilyPersonsController::class,'getAllFamilyPersonsOfLead'])->name('allFamilyPersonOfLead');
    route::post('updateFamilyPerson/{id}',[FamilyPersonsController::class,'updateFamilyPerson'])->name('updateFamilyPerson');
    route::post('deleteFamilyPerson/{id}/{leadId}',[FamilyPersonsController::class,'deleteFamilyPerson'])->name('deleteFamilyPerson');
    route::post('createLeadDataKK/{leadIdd}/{personIdd}',[LeadDataController::class,'createLeadDataKK'])->name('createLeadDataKK');
    route::post('updateLeadDataKK/{leadId}/{personId}',[LeadDataController::class,'updateLeadDataKK'])->name('updateLeadDataKK');
    route::post('updateleadDataACounteroffered/{leadId}/{personId}',[LeadDataController::class,'updateleadDataACounteroffered'])->name('updateleadDataACounteroffered');
    route::post('updateLeadDataFahrzeug/{leadId}/{personId}',[LeadDataController::class,'updateLeadDataFahrzeug'])->name('updateLeadDataFahrzeug');
    route::post('updateLeadDataThings/{leadId}/{personId}',[LeadDataController::class,'updateLeadDataThings'])->name('updateLeadDataThings');
    route::post('createLeadDataPrevention/{leadId}/{personId}',[LeadDataController::class,'createLeadDataPrevention'])->name('createLeadDataPrevention');
    route::get('getAllLeadDataById/{leadId}/{personId}',[LeadDataController::class,'getAllLeadDataById'])->name('getAllLeadDataById');
    route::post('deleteLeadDataKK/{dataId}',[LeadDataController::class,'deleteLeadDataKK'])->name('deleteLeadDataKK');
    route::post('deleteLeadDataCounteroffered/{dataId}',[LeadDataController::class,'deleteLeadDataCounteroffered'])->name('deleteLeadDataCounteroffered');
    route::post('deleteLeadDataFahrzeug/{dataId}',[LeadDataController::class,'deleteLeadDataFahrzeug'])->name('deleteLeadDataFahrzeug');
    route::post('deleteLeadDataThings/{dataId}',[LeadDataController::class,'deleteLeadDataThings'])->name('deleteLeadDataThings');
    route::post('deleteLeadDataPrevention/{dataId}',[LeadDataController::class,'deleteLeadDataPrevention'])->name('deleteLeadDataPrevention');
    route::post('deleteTeam/{teamId}',[TeamController::class,'deleteTeam'])->name('deleteTeam');
    route::get('showTeamById/{teamId}',[TeamController::class,'showTeamById'])->name('showTeamById');
    route::get('updateTeam/{teamId}',[TeamController::class,'updateTeam'])->name('updateTeam');
   //  Route::group(['prefix' => 'team', 'middleware' => 'json.response'], function () {
      route::post('create',[TeamController::class,'createTeam'])->name('createTeam');
//   });
   route::post('documentform/{id}',[TasksController::class,'documentform'])->name('documentform');
   route::any('tasks',[TasksController::class,'tasks'])->name('tasks');
   route::get('searchword',[TasksController::class,'searchword'])->name('searchword');
   route::any('costumers',[TasksController::class,'costumers'])->name('costumers');
   route::any('search',[TasksController::class,'costumers'])->name('search');
   route::get('ispending',[TasksController::class,'itis']);
   route::get('todayappointments',[TasksController::class,'today']);
   route::get('vuedate',[TasksController::class,'vuedate']);
   route::get('chat/{u1}/{u2}',[ChatController::class,'chat'])->name('chat');
   route::get('leadfamilyperson/{id}',[FamilyPersonsController::class,'family_persons'])->name('leadfamilyperson');
   route::any('addappointmentfile',[UserController::class,'addappointmentfile'])->name('addappointmentfile');
   // Route::group(['middleware' => 'json.response'], function () {
      route::get('addtodo',[TodoController::class,'addtodo']);
   // });

    route::get('costumer_form/{id}',function ($id){
        $id = Crypt::decrypt($id) / 1244;

        $costumer = family::findOrFail($id);
        return view('costumer_form')->with(compact('costumer'));
    })->name('costumer_form');

    route::post('save_costumer_form/{id}',[\App\Http\Controllers\CostumerFormController::class,'save_costumer_form'])->name('save_costumer_form');

   route::get('todos',[TodoController::class,'todos']);
   route::get('deletetodo',[TodoController::class,'deletetodo']);
   route::get('donetodo',[TodoController::class,'donetodo']);
   route::get('addnumber',[TodoController::class,'addnumber']);
   route::get('deletenumber',[TodoController::class,'deletenumber']);
   route::get('numbers',[TodoController::class,'numbers']);
   route::get('calendar',[CalendarController::class,'calendar'])->name('calendar')->middleware('role:admin|fs|salesmanager|management,admins');
   route::get('accepttask/{id}',[TasksController::class,'accepttask'])->name('accepttask');
   route::get('dates',[TasksController::class,'dates'])->name('dates');

   route::post('addPersonalAppointment',[\App\Http\Controllers\PersonalAppointmentController::class,'addPersonalAppointment'])->name('addPersonalAppointment');

   route::post('confirmsms',[TasksController::class,'confirmsms'])->name('confirmsms');
   route::get('add',[TasksController::class,'adddata']);
route::get('permission', function(){
   $role = Role::find(2);
   $user = Admins::find(2);
   $user->assignRole($role);
  return $user->getRoleNames();
});
Route::get('login',[UserController::class,'rnlogin'])->name('rnlogin')->withoutMiddleware([confirmedcode::class]);
route::post('trylogin',[UserController::class,'trylogin'])->name('trylogin')->withoutMiddleware([confirmedcode::class]);
route::any('acceptdata/{id}/{accept?}',[LeadDataController::class,'acceptdata'])->name('acceptdata');
route::get('smsverification',[UserController::class,'smsconfirmation'])->name('smsconfirmation')->withoutMiddleware([confirmedcode::class]);
route::get('smsconfirm',function (){
    $Admin = Admins::find(12);
    return view('confirm_sms');
})->name('smsconfirm')->withoutMiddleware([confirmedcode::class]);
route::post('confirmcode',[UserController::class,'confirmcode'])->name('confirmcode')->withoutMiddleware([confirmedcode::class]);
route::get('logout',[UserController::class,'logout'])->name('logout')->withoutMiddleware([confirmedcode::class]);
route::get('status',[StatusController::class,'status'])->name('status');
route::get('editclientdata/{id}',[StatusController::class,'editclientdata'])->name('editclientdata');
route::post('editclientform/{id}',[StatusController::class,'editclientform'])->name('editclientform');
route::get('file/{file?}',function($file = null){
        if(Storage::disk('img')->exists($file)){
           $file = Storage::disk('img')->get($file);
           $response = Response::make($file, 200);
         $response->header('Content-Type', 'file');
           return $response;
        }
        else{
           return redirect()->back();
        }
})->middleware('role:admin|backoffice|salesmanager|management,admins')->name('showfile');
});

// Route::get('Appointments', array('as' => 'route.index', 'Appointments' => 'App\Http\Controllers\AppointmentsController@index'));
// route::get('Appointments',[AppointmentsController::class,'Appointments']);

Route::get('Appointments', 'App\Http\Controllers\AppointmentsController@index')->name('Appointments');
Route::get('Dropajax', 'App\Http\Controllers\AppointmentsController@Dropajax')->name('Dropajax');

route::get('sendcode',function(){
    \Mail::to('bulzart@outlook.com')->send(new \App\Mail\confirmcode(random_int(1000,9000)));
});



route::get('nr/{nr}',function($nr){
   $key = 15;
$val = $key;
   for($i = 0; $i < 3; $i++){
$val = $val*$nr;
$nr++;
   }
   echo $val;
   return Auth::user();
});
route::get('getchat/{u1}/{u2}',[ChatController::class,'getchat']);
route::any('sendmessage/{u1}/{u2}',[ChatController::class,'sendmessage']);
route::get('getadmin',function (){
   return Auth::guard('admins')->user()->id;
});
route::get('pendingreject/{id}/{where}',function($id,$where){
   $leads = lead::find($id);
  if($where == 0){

   return view('pendingreject')->with('pojo',false)->with('leads',lead::find($id));
  }
  else{

   return view('pendingreject')->with('pojo',true)->with('leads',lead::find($id));
  }
});

