<?php

namespace App\Http\Controllers;

use App\Models\family;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function status(){
        $clients = family::all();
        return view('status',compact('clients'));
    }
    public function editclientdata($id){
        $client = family::find($id);
        return view('editclientdata',compact('client'));
    }
    public function editclientform(Request $request,$id){
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $birthdate = $request->birthdate;
        $status = $request->status;

        if(family::find($id)->update([
            'first_name'=> $first_name,
            'last_name'=>$last_name,
            'birthdate'=>$birthdate,
            'status' => $status
        ])) {
            return redirect()->back()->with('success', 'Client Edited Successfuly');
        }else{
            return redirect()->back()->with('fail', 'Client Edited Fail');
        }
    }
}
