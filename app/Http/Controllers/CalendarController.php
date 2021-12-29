<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Nexmo;
use Illuminate\Support\Str;

class CalendarController extends Controller
{
    public function calendar(){

         $maps = null;
         if(Auth::guard('admins')->user()->hasRole('admin')){$maps = lead::where('appointment_date',Carbon::now()->format('Y-m-d'))->get(); }else{ $maps = lead::where('assign_to_id',auth::guard('admins')->user()->id)->where('appointment_date',Carbon::now()->format('Y-m-d'))->get();}

        return view('calendar',compact('maps'));
    }
}
