<?php

namespace App\Http\Controllers;

use App\Models\family;
use App\Models\FamilyPerson;
use App\Models\lead;
use App\Models\data;
use App\Models\LeadDataKK;
use App\Models\Pendency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FamilyPersonsController extends Controller
{
    public function family_persons($id){
        $cnt = 0;
        $cnt1 = 0;
        if (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('fs')){
            $lead = family::find($id);
           $data = LeadDataKK::where('person_id',$id)->get();
           if($data == null){
            return view('documentsform',compact('lead'));}
            else{
                $data = new data();
                $data->getdata($id);
                return redirect()->route('acceptdata',$id);
            }
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
        family::where('id', $id)->update($request->all());
        return redirect()->back()->with('message', 'Family person was updated');
    }

    public function deleteFamilyPerson($id, $leadId)
    {
        family::where('id', $id)->where('leads_id', $leadId)->delete();
    }

    public function updateleadfamilyperson( Request $request, $id){
        family::where('id',$id)->update(['first_name' => $request->familyfirstname, 'last_name' => $request->familylastname]);

        return redirect()->back()->with('success','Update successfuly');
    }
}