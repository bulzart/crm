<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\confirmcode;
use App\Http\Middleware\confirmedadmin;
use App\Http\Middleware\confirmedcode;
use App\Mail\confirmcode as MailConfirmcode;
use Carbon\Carbon;
use App\Http\Controllers\TasksController;
use App\Models\appointment;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TodoController;

use function GuzzleHttp\Promise\task;
   route::get('acceptapp/{id}',[UserController::class,'acceptapp']);
    route::get('closenots',[UserController::class,'closenots']);
    route::get('notifications',[UserController::class,'notifications']);
    route::get('insterappointment',[UserController::class,'insertappointment'])->name('insertappointment');
    route::get('join/{campaign}',[UserController::class,'getlead'])->name('getlead');
    Route::get('login',[UserController::class,'rnlogin'])->name('rnlogin');
    route::get('/',[UserController::class,'dashboard'])->name('dashboard');
    route::post('trylogin',[UserController::class,'trylogin'])->name('trylogin');
    route::post('confirmcode',[UserController::class,'confirmcode'])->name('confirmcode');
    route::get('logout',[UserController::class,'logout'])->name('logout');
    route::get('leads',[UserController::class,'leads'])->name('leads');
    route::post('asignlead/{id}',[UserController::class,'asignlead'])->name('asignlead');
    route::get('alead/{id}',[UserController::class,'alead'])->name('alead');
    route::post('joined',[UserController::class,'joined'])->name('joined');
    route::get('dlead/{id}',[UserController::class,'dlead'])->name('dlead');
    route::post('deletedlead/{id}',[UserController::class,'deletedlead'])->name('deletedlead');
    route::post('addappointment',[UserController::class,'addappointment'])->name('addappointment'); //Krijo appointment
    route::get('reject/{id}',[UserController::class,'reject'])->name('reject'); //refuzon appointment admini
    route::get('dealclosed/{id}',[UserController::class,'dealclosed'])->name('dealclosed');
    route::post('completeapp/{id}',[UserController::class,'completeapp'])->name('completeapp');
    route::get('dealnotclosed/{id}',[UserController::class,'dealnotclosed'])->name('dealnotclosed');
    route::post('rejectedleads',[UserController::class,'rejectedleads'])->name('rejectedleads');

    //----------------------------------------------------------------//
    route::get('document/{id}',function ($id){
       if(appointment::find($id)){
            if(appointment::find($id)->completed == 0){
                $data = appointment::find($id);
                $data = json_decode($data->data);

       return view('documentsform',compact('id','data'));}}
       else{
return redirect()->route('dashboard')->with('unsuccessfull','Task was completed successfully');
       }
    })->name('document');
    route::post('documentform/{id}',[\App\Http\Controllers\TasksController::class,'documentform'])->name('documentform');
    route::get('tasks',[TasksController::class,'tasks'])->name('tasks');
    route::get('costumers',[TasksController::class,'costumers'])->name('costumers');
    route::get('searchword',[TasksController::class,'searchword'])->name('searchword');

    route::get('costumersview',function (){

        $data = \App\Models\appointment::all();
       return view('costumers',compact('data'));
    })->middleware(\App\Http\Middleware\Firsttime::class);
route::get('ispending',[TasksController::class,'itis']);
route::get('todayappointments',[TasksController::class,'today']);



route::get('vuedate',[TasksController::class,'vuedate']);
route::get('smsconfirm',function (){
    return view('confirm_sms');
});

route::post('confirmsms',[TasksController::class,'confirmsms'])->name('confirmsms');

route::get('confirmsmscode',function (){
   return view('confirmsmscode');
})->name('confirmsmscode');
route::get('chat',[ChatController::class,'chat']);
route::get('calendar',[UserController::class,'calendar'])->name('calendar');
route::get('time',function(){
   return Carbon::now()->format('Y-m-d');
});
route::get('addtodo',[TodoController::class,'addtodo']);

route::get('calendar',function (){
    return view('calendar');
});







