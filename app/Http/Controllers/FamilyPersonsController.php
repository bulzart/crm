<?php

namespace App\Http\Controllers;

use App\Models\family;
use App\Models\FamilyPerson;
use App\Models\lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FamilyPersonsController extends Controller
{
    public function family_persons($id){
        $cnt = 0;
        $cnt1 = 0;
        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('fs')){
            $lead = lead::find($id);
            return view('documentsform',compact('lead'));
         } 
         else {
                return redirect()->back();
            }
        }
    

    public function getAllFamilyPersonsOfLead($id)
    {
        $familyPersons = family::where('leads_id', $id)->get();
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

    public function updateleadfamilyperson( Request $request, $id){
        family::where('id',$id)->update(['first_name'=>$request->familyfirstname,'last_name'=>$request->familylastname]);
        return redirect()->back()->with('success','Update successfuly');
    }
}