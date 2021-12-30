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
      
        if (Auth::guard('admins')->user()->hasRole('admin')){
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
  
        return view('leadfamily_person',compact('tasks2'));
    }

    public function getAllFamilyPersonsOfLead($id)
    {
        $familyPersons = FamilyPerson::where('leads_id', $id)->get();

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