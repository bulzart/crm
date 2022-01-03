<?php

namespace App\Http\Controllers;

use App\Models\family;
use App\Models\FamilyPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FamilyPersonsController extends Controller
{

    public function family_persons($id){
        $cnt = 0;
        $cnt1 = 0;
      
<<<<<<< HEAD
        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('backoffice')){
            if(Auth::guard('admins')->user()->hasRole('fs')){
                $lead = lead::find($id);
                if($lead->assign_to_id == Auth::guard('admins')->user()->id){
=======
        if (Auth::guard('admins')->user()->hasRole('admin')){
>>>>>>> c7c3bbe8dc313c2ee71ba4a4b8de02b14a8b05c3
            $tasks = family::where('leads_id', $id)->get();
            //dd($tasks);
            $tasks2 = [];
            $cntt= 0;
            for ($i = 0; $i< count($tasks);$i++){
                if ($tasks[$i]->assign_to_id == Auth::guard('admins')->user()->id){
                    $tasks2[$cntt] = $tasks[$i];
                    $cntt++;
                }
            }
        }
<<<<<<< HEAD
        }
        }
=======
>>>>>>> c7c3bbe8dc313c2ee71ba4a4b8de02b14a8b05c3
  
        return view('leadfamily_person',compact('tasks2'));
    }

    public function getAllFamilyPersonsOfLead($id)
    {
        $familyPersons = FamilyPerson::where('leads_id', $id)->get();
<<<<<<< HEAD
        
=======

>>>>>>> c7c3bbe8dc313c2ee71ba4a4b8de02b14a8b05c3
        return $familyPersons;
    }

    public function updateFamilyPerson($id, Request $request)
    {
        $updatedPerson = family::where('id', $id)->update($request->all());
    
        return redirect()->back()->with('message', 'Family person was updated');
    }

    public function deleteFamilyPerson($id, $leadId)
    {
        $updatedPerson = family::where('id', $id)->where('leads_id', $leadId)->delete();
    }
}