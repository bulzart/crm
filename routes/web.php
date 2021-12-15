<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\confirmcode;
use App\Http\Middleware\confirmedadmin;
use App\Http\Middleware\confirmedcode;
use App\Mail\confirmcode as MailConfirmcode;
use Carbon\Carbon;
use App\Http\Controllers\TasksController;
use App\Models\appointment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    route::get('insterappointment',[UserController::class,'insertappointment'])->name('insertappointment');
    route::get('join/{campaign}',[UserController::class,'getlead'])->name('getlead');
    Route::get('login',[UserController::class,'rnlogin'])->name('rnlogin');
    route::get('adduser',[UserController::class,'adduser']);
    route::get('/',[UserController::class,'dashboard'])->name('dashboard');
    route::post('trylogin',[UserController::class,'trylogin'])->name('trylogin');
    route::post('confirmcode',[UserController::class,'confirmcode'])->name('confirmcode');
    route::get('logout',[UserController::class,'logout'])->name('logout');
    route::get('leads',[UserController::class,'leads'])->name('leads');
    route::post('asignlead/{id}',[UserController::class,'asignlead'])->name('asignlead');
    route::get('alead/{id}',[UserController::class,'alead'])->name('alead');
    route::post('joined',[UserController::class,'joined'])->name('joined');
    route::get('dates',[UserController::class,'dates'])->name('dates');
    route::get('dlead/{id}',[UserController::class,'dlead'])->name('dlead');
    route::post('addappointment',[UserController::class,'addappointment'])->name('addappointment'); //Krijo appointment
    route::get('reject/{id}',[UserController::class,'reject'])->name('reject'); //refuzon appointment admini
    route::post('importexcel',[UserController::class,'importexcel'])->name('importexcel');
    route::post('filterbydateapp',[UserController::class,'filterbydateapp'])->name('fbydate');
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
    });
    route::post('documentform/{id}',[\App\Http\Controllers\TasksController::class,'documentform'])->name('documentform');
    route::get('makenotificationsdone',[TasksController::class,'dnotifications']);
    route::get('tasks',[TasksController::class,'tasks'])->name('tasks');
    route::get('costumers',[TasksController::class,'costumers'])->name('costumers');
    route::get('searchword',[TasksController::class,'searchword'])->name('searchword');

    route::get('costumersview',function (){
        $data = \App\Models\appointment::all();
       return view('costumers',compact('data'));
    });
route::get('ispending',[TasksController::class,'itis']);

