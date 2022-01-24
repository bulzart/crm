<?php

namespace App\Http\Controllers;

use App\Models\PersonalAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalAppointmentController extends Controller
{
    public function addPersonalAppointment(Request $request){
        $personalApp = new PersonalAppointment();

        $personalApp->title = $request->title;
        $personalApp->time = $request->time;
        $personalApp->address = $request->address;
        $personalApp->comment = $request->comment;
        $personalApp->user_id = Auth::user()->id;
        $personalApp->AppOrCon = $request->apporconId;

        if($personalApp->save()){
            return redirect()->route('dashboard')->with('success','Your Action Successfuly Inserted');
        }else{
            return redirect()->route('dashboard')->with('fail','Your Personal Appointmant Fail To Insert');

        }
    }
}
