<?php

namespace App\Http\Controllers;

use App\Enums\FolderPaths;
use App\Models\data;
use App\Models\family;
use App\Models\LeadDataCounteroffered;
use App\Models\LeadDataFahrzeug;
use App\Models\LeadDataKK;
use App\Models\LeadDataPrevention;
use App\Models\LeadDataThings;
use App\Models\Pendency;
use App\Traits\FileManagerTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class LeadDataController extends Controller
{
    use FileManagerTrait;
    public function acceptdata($id,$accept = false){
$id = Crypt::decrypt($id) / 1244;
if(Auth::guard('admins')->user()->hasRole('fs')){
    if(Auth::user()->id == family::find($id)->lead->assign_to_id || Pendency::where('family_id',$id)->first()->admin_id == Auth::user()->id){
        if(!$accept){
            $data = new data();
            $lead = family::find($id);
            $data->getdata($id);
            return view('updatedocument',compact('data','lead'));}
            else{
                $pend = Pendency::where('family_id',$id)->update(['completed' => 1]);
                family::where('id',$id)->update(['status' => 'Done']);
                return redirect()->route('acceptdata',['id' => Crypt::encrypt($id * 1244)]);
            }
    }
    else{
        return redirect()->back();
    }
}
else{
    if(!$accept){
        $data = new data();
        $lead = family::find($id);
        $data->getdata($id);
        return view('updatedocument',compact('data','lead'));}
        else{
            $pend = Pendency::where('family_id',$id)->update(['completed' => 1]);
            family::where('id',$id)->update(['status' => 'Done']);
            return redirect()->route('acceptdata',['id' => $id]);
        }
}

    }

    public function createLeadDataKK($leadIdd, $personIdd, Request $request,$pendency = false)
    {
        $leadId = Crypt::decrypt($leadIdd);
        $leadId /= 1244;

        $personId = Crypt::decrypt($personIdd);
        $personId /= 1244;

       $person = family::find($personId);
       if($person->lead->assign_to_id == Auth::guard('admins')->user()->id || Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice') || Auth::guard('admins')->user()->hasRole('salesmanager') || Pendency::where('family_id',$personId)->first()->admin_id == Auth::user()->id){
        LeadDataKK::create([
            'leads_id' => $leadId,
            'person_id' => $personId,
            'pre_insurer' => $request->pre_insurer ? $this->storeFile($request->pre_insurer, FolderPaths::KK_FILES) : null,
            'id_required' => $request->id_required ? $this->storeFile($request->id_required, FolderPaths::KK_FILES) : null,
            'notice_by' => $request->notice_by ? $this->storeFile($request->notice_by, FolderPaths::KK_FILES) : null,
            'power_of_attorney' => $request->power_of_attorney ? $this->storeFile($request->power_of_attorney, FolderPaths::KK_FILES) : null,
        ]);
        LeadDataCounteroffered::create([
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->upload_police ? $this->storeFile($request->upload_police, FolderPaths::KK_FILES) : null,
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment
        ]);
        LeadDataFahrzeug::create([
            'leads_id' => $leadId,
            'person_id' => $personId,
            'leasing' => $request->leasing,
            'leasing_name' => $request->leasing_name,
            'year_of_purchase' => $request->year_of_purchase,
            'placing_on_the_market' => $request->placing_on_the_market,
            'insurance_date' => $request->insurance_date,
            'redeemed' => $request->redeemed ? $this->storeFile($request->redeemed, FolderPaths::KK_FILES) : null,
            'km_stood' => $request->km_stood,
            'issue_date' => $request->issue_date,
            'nationality' => $request->nationality,
            'most_common' => $request->most_common,
            'insurance' => $request->insurance,
            'deductible' => $request->deductible,
            'carried' => $request->carried,
            'repair_shop' => $request->repair_shop,
            'accident_coverage' => $request->accident_coverage,
            'traffic_legal_protection' => $request->traffic_legal_protection,
            'grossly' => $request->grossly,
            'glass_protection' => $request->glass_protection,
            'parking_damage' => $request->parking_damage,
            'hour_breakdown_assistance' => $request->hour_breakdown_assistance,
            'comment' => $request->comment
        ]);
        LeadDataThings::create([
            'leads_id' => $leadId,
            'person_id' => $personId,
            'nationality' => $request->nationality_sachen,
            'residence_permit' => $request->residence_permit,
            'telephone_nr' => $request->telephone_nr,
            'email' => $request->email_s,
            'zivilstand' => $request->zivilstand,
            'employment_relationship' => $request->employment_relationship,
            'job' => $request->job,
            'payment_frequency' => $request->payment_frequency,
            'amount_per_month' => $request->amount_per_month,
            'share_guarantee' => $request->share_guarantee,
            'start_of_contract' => $request->start_of_contract,
            'premium_exemption' => $request->premium_exemption,
            'eu_pension' => $request->eu_pension,
            'death_benefit' => $request->death_benefit,
            'smoker' => $request->smoker,
            'desired' => $request->desired,
        ]);
        LeadDataPrevention::create([
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->upload_police__ ? $this->storeFile($request->upload_police__, FolderPaths::KK_FILES) : null,
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment,
            'number_of_people' => $request->number_of_people,
            'number_of_rooms' => $request->number_of_rooms,
            'sum_insured' => $request->sum_insured,
            'desired_additional_coverage' => $request->desired_additional_coverage,
            'personal_liability' => $request->personal_liability,
            'society' => $request->society,
            'n_of_p_legal_protection' => $request->n_of_p_legal_protection,
        ]);
        $family = family::where('id', $personId)->first();
        $status = ['status' => 'Submited'];
        $family->update($status);
        $pend = Pendency::where('family_id',$personId)->first();
        if($pend){
        $pend->done = 1;
        $pend->save();
    }
    else{
    $pend = new Pendency();
    $pend->admin_id = Auth::user()->id;
    $pend->family_id = $personId;
    $pend->done = 1;
    $pend->save();
    }
            return redirect()->back()->with('success','Successfully submitted and will be waiting for the backoffice!');
    }
    else{
        return redirect()->back();
    }
}


    public function updateLeadDataKK($leadId, $personId, Request $request)
    {
    $leadId = Crypt::decrypt($leadId) / 1244;
    $personId = Crypt::decrypt($personId) / 1244;

        $existingLeadDataKK = LeadDataKK::where('leads_id', $leadId)->where('person_id', $personId)->latest()->first();
        $leadDataKK = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'pre_insurer' => $request->hasFile('pre_insurer') ? $this->storeFile($request->pre_insurer, FolderPaths::KK_FILES) : $existingLeadDataKK->pre_insurer,
            'id_required' => $request->hasFile('id_required') ? $this->storeFile($request->id_required, FolderPaths::KK_FILES) : $existingLeadDataKK->id_required,
            'notice_by' => $request->hasFile('notice_by') ? $this->storeFile($request->notice_by, FolderPaths::KK_FILES) : $existingLeadDataKK->notice_by,
            'power_of_attorney' => $request->hasFile('power_of_attorney') ? $this->storeFile($request->power_of_attorney, FolderPaths::KK_FILES) : $existingLeadDataKK->power_of_attorney,
        ];

        if($existingLeadDataKK){
            $existingLeadDataKK->update($leadDataKK);
        }

        $existingLeadDataCounterOffered = LeadDataCounteroffered::where('leads_id', $leadId)->where('person_id', $personId)->latest()->first();

        $leadDataCounteroffered = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_police') ? $this->storeFile($request->upload_police, FolderPaths::KK_FILES) : $existingLeadDataCounterOffered->upload_police,
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment
        ];


        if($existingLeadDataCounterOffered){
            $existingLeadDataCounterOffered->update($leadDataCounteroffered);
        }

        $existingLeadDataFahrzeug = LeadDataFahrzeug::where('leads_id', $leadId)->where('person_id', $personId)->latest()->first();
        $leadDataFahrzeug = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'leasing' => $request->leasing,
            'leasing_name' => $request->leasing_name,
            'year_of_purchase' => $request->year_of_purchase,
            'placing_on_the_market' => $request->placing_on_the_market,
            'insurance_date' => $request->insurance_date,
            'redeemed' => $request->hasFile('redeemed') ? $this->storeFile($request->redeemed, FolderPaths::KK_FILES) : $existingLeadDataFahrzeug->redeemed,
            'km_stood' => $request->km_stood,
            'issue_date' => $request->issue_date,
            'nationality' => $request->nationality,
            'most_common' => $request->most_common,
            'insurance' => $request->insurance,
            'deductible' => $request->deductible,
            'carried' => $request->carried,
            'repair_shop' => $request->repair_shop,
            'accident_coverage' => $request->accident_coverage,
            'traffic_legal_protection' => $request->traffic_legal_protection,
            'grossly' => $request->grossly,
            'glass_protection' => $request->glass_protection,
            'parking_damage' => $request->parking_damage,
            'hour_breakdown_assistance' => $request->hour_breakdown_assistance,
            'comment' => $request->comment
        ];

        if($existingLeadDataFahrzeug){
            $existingLeadDataFahrzeug->update($leadDataFahrzeug);
        }

        $leadDataThings = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'nationality' => $request->nationality,
            'residence_permit' => $request->residence_permit,
            'telephone_nr' => $request->telephone_nr,
            'employment_relationship' => $request->employment_relationship,
            'job' => $request->job,
            'payment_frequency' => $request->payment_frequency,
            'amount_per_month' => $request->amount_per_month,
            'share_guarantee' => $request->share_guarantee,
            'start_of_contract' => $request->start_of_contract,
            'premium_exemption' => $request->premium_exemption,
            'eu_pension' => $request->eu_pension,
            'death_benefit' => $request->death_benefit,
            'smoker' => $request->smoker,
            'desired' => $request->desired,
        ];

        $existingLeadDataThings = LeadDataThings::where('leads_id', $leadId)->where('person_id', $personId)->latest()->first();

        if($existingLeadDataThings){
            $existingLeadDataThings->update($leadDataThings);
        }

        $existingLeadDataPrevention = LeadDataPrevention::where('leads_id', $leadId)->where('person_id', $personId)->latest()->first();
        $leadDataPrevention = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $request->hasFile('upload_police__') ? $this->storeFile($request->upload_police__, FolderPaths::KK_FILES) : $existingLeadDataPrevention->upload_police__,
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment__,
            'number_of_people' => $request->number_of_people,
            'number_of_rooms' => $request->number_of_rooms,
            'sum_insured' => $request->sum_insured,
            'desired_additional_coverage' => $request->desired_additional_coverage,
            'personal_liability' => $request->personal_liability,
            'society' => $request->society,
            'n_of_p_legal_protection' => $request->n_of_p_legal_protection,
        ];


        if($existingLeadDataPrevention){
            $existingLeadDataPrevention->update($leadDataPrevention);
        }
        $lpend = Pendency::where('family_id',$personId)->first();
       
            if($lpend){
                $lpend->completed = 0;
                $lpend->done = 1;
                $lpend->save();
            }
            else{
                $pend = new Pendency();
                $pend->family_id = $personId;
                $pend->admin_id = Auth::user()->id;
                $pend->done = 1;
                $pend->save();
                }
        
        
        return redirect()->route('acceptdata',Crypt::encrypt($personId * 1244));
    }

    public function getAllLeadDataById($leadId, $personId)
    {
        $leadDataKK = LeadDataKK::where('leads_id', $leadId)->where('person_id', $personId)->first();
        $leadDataCounterOffered = LeadDataCounteroffered::where('leads_id', $leadId)->where('person_id', $personId)->first();
        $leadDataFahrzeug = LeadDataFahrzeug::where('leads_id', $leadId)->where('person_id', $personId)->first();
        $leadDataThings = LeadDataThings::where('leads_id', $leadId)->where('person_id', $personId)->first();
        $leadDataPrevention = LeadDataPrevention::where('leads_id', $leadId)->where('person_id', $personId)->first();

        return [
            'dataKK' => $leadDataKK ? $leadDataKK : null,
            'counterOffered' => $leadDataCounterOffered ? $leadDataCounterOffered : null,
            'fahrzeug' => $leadDataFahrzeug ? $leadDataFahrzeug : null,
            'things' => $leadDataThings ? $leadDataThings : null,
            'prevention' => $leadDataPrevention ? $leadDataPrevention : null
        ];
    }

    public function deleteLeadDataKK($dataId)
    {
        return LeadDataKK::where('id', $dataId)->delete();
    }

    public function deleteLeadDataCounteroffered($dataId)
    {
        return LeadDataCounteroffered::where('id', $dataId)->delete();
    }

    public function deleteLeadDataFahrzeug($dataId)
    {
        return LeadDataFahrzeug::where('id', $dataId)->delete();
    }

    public function deleteLeadDataThings($dataId)
    {
        return LeadDataThings::where('id', $dataId)->delete();
    }

    public function deleteLeadDataPrevention($dataId)
    {
        return LeadDataPrevention::where('id', $dataId)->delete();
    }
}
