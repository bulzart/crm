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
use App\Models\lead;
use Musonza\Chat\Chat;


use function GuzzleHttp\Promise\task;

route::prefix('')->group(function(){
   route::get('acceptapp/{id}',[UserController::class,'acceptapp']);
    route::get('closenots',[UserController::class,'closenots']);
    route::get('notifications',[UserController::class,'notifications']);
    route::get('insterappointment',[UserController::class,'insertappointment'])->name('insertappointment');
    route::get('/',[UserController::class,'dashboard'])->name('dashboard');
    route::get('logout',[UserController::class,'logout'])->name('logout');
    route::get('leads',[UserController::class,'leads'])->name('leads');
    route::post('asignlead/{id}',[UserController::class,'asignlead'])->name('asignlead');
    route::get('alead/{id}',[UserController::class,'alead'])->name('alead');
    route::post('joined',[UserController::class,'joined'])->name('joined');
    route::get('dlead/{id}',[UserController::class,'dlead'])->name('dlead');
    route::post('deletedlead/{id}',[UserController::class,'deletedlead'])->name('deletedlead');
    route::post('addappointment',[UserController::class,'addappointment'])->name('addappointment'); //Krijo appointment
    route::get('dealclosed/{id}',[UserController::class,'dealclosed'])->name('dealclosed');
    route::post('completeapp/{id}',[UserController::class,'completeapp'])->name('completeapp');
    route::get('dealnotclosed/{id}',[UserController::class,'dealnotclosed'])->name('dealnotclosed');
    route::post('rejectedleads',[UserController::class,'rejectedleads'])->name('rejectedleads');

    //----------------------------------------------------------------//
    route::get('leadfamily/{id}',function ($id){
      $data = \App\Models\lead::find($id);
      $data = $data->family;


      return view('leadfamily',compact('data'));
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


   route::post('documentform/{id}',[TasksController::class,'documentform'])->name('documentform');
   route::get('tasks',[TasksController::class,'tasks'])->name('tasks');

   route::get('searchword',[TasksController::class,'searchword'])->name('searchword');
   route::get('costumers',function (){
        $data = \App\Models\family::all();
       return view('costumers',compact('data'));
   })->name('costumers');
   route::get('search',[TasksController::class,'costumers'])->name('search');
   route::get('ispending',[TasksController::class,'itis']);
   route::get('todayappointments',[TasksController::class,'today']);
   route::get('vuedate',[TasksController::class,'vuedate']);
   route::get('chat',[ChatController::class,'chat']);

   route::get('addtodo',[TodoController::class,'addtodo']);
   route::get('todos',[TodoController::class,'todos']);
   route::get('deletetodo',[TodoController::class,'deletetodo']);
   route::get('donetodo',[TodoController::class,'donetodo']);
   route::get('addnumber',[TodoController::class,'addnumber']);
   route::get('deletenumber',[TodoController::class,'deletenumber']);
   route::get('numbers',[TodoController::class,'numbers']);
   route::get('calendar',[CalendarController::class,'calendar'])->name('calendar');
   route::get('accepttask/{id}',[TasksController::class,'accepttask'])->name('accepttask');
   route::get('dates',[TasksController::class,'dates'])->name('dates');
});
route::get('assignpendency/{admin}/{id}/{desc}',[TasksController::class,'assignpendency']);
   route::get('smsconfirm',function (){
      $Admin = Admins::find(12);
      return view('confirm_sms');
   })->name('smsconfirm');
   Route::get('login',[UserController::class,'rnlogin'])->name('rnlogin');
   route::post('trylogin',[UserController::class,'trylogin'])->name('trylogin');
   route::post('confirmsms',[TasksController::class,'confirmsms'])->name('confirmsms');
   route::get('smsverification',[UserController::class,'smsconfirmation'])->name('smsconfirmation');
   route::post('confirmcode',[UserController::class,'confirmcode'])->name('confirmcode');
   route::get('add',[TasksController::class,'adddata']);
route::get('permission', function(){
   $role = Role::find(2);
   $user = Admins::find(2);
   $user->assignRole($role);
  return $user->getRoleNames();
});
route::get('status',[StatusController::class,'status']);
route::get('chat',function(){
   $admin1 = Admins::find(1);
   $admin2 = Admins::find(2);
   $chat = Chat::createConversation([$admin1,$admin2]);
   
   $message = Chat::message('http://127.0.0.1:8000/images/logo.png')
   ->from($admin1)
   ->to($chat)
   ->type('image')
   ->send();



});
route::get('chat/{admin1}/{admin2}/{pid}',[ChatController::class,"chat"]);








