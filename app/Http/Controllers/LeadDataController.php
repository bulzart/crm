<?php

namespace App\Http\Controllers;

use App\Enums\FolderPaths;
use App\Models\LeadDataCounteroffered;
use App\Models\LeadDataFahrzeug;
use App\Models\LeadDataKK;
use App\Models\LeadDataPrevention;
use App\Models\LeadDataThings;
use App\Traits\FileManagerTrait;
use Illuminate\Http\Request;

class LeadDataController extends Controller
{
    use FileManagerTrait;

    public function createLeadDataKK($leadId, $personId, Request $request)
    {
        $leadDataKK = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'pre_insurer' => $this->storeFile($request->pre_insurer, FolderPaths::KK_FILES),
            'id_required' => $this->storeFile($request->id_required, FolderPaths::KK_FILES),
            'notice_by' => $this->storeFile($request->notice_by, FolderPaths::KK_FILES),
            'power_of_attorney' => $this->storeFile($request->power_of_attorney, FolderPaths::KK_FILES),
        ];

        if($leadDataKK){
            LeadDataKK::create($leadDataKK);
        }
    }

    public function updateLeadDataKK($leadId, $personId, Request $request)
    {
        $leadDataKK = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'pre_insurer' => $this->storeFile($request->pre_insurer, FolderPaths::KK_FILES),
            'id_required' => $this->storeFile($request->id_required, FolderPaths::KK_FILES),
            'notice_by' => $this->storeFile($request->notice_by, FolderPaths::KK_FILES),
            'power_of_attorney' => $this->storeFile($request->power_of_attorney, FolderPaths::KK_FILES),
        ];

        $existingLeadDataKK = LeadDataKK::where('leads_id', $leadId)->where('person_id', $personId)->first();

        if($existingLeadDataKK){
            $existingLeadDataKK->update($leadDataKK);
        }
    }

    public function createleadDataACounteroffered($leadId, $personId, Request $request)
    {
        $leadDataCounteroffered = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $this->storeFile($request->upload_police, FolderPaths::KK_FILES),
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment
        ];

        if($leadDataCounteroffered){
            LeadDataCounteroffered::create($leadDataCounteroffered);
        }
    }

    public function updateleadDataACounteroffered($leadId, $personId, Request $request)
    {
        $leadDataCounteroffered = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $this->storeFile($request->upload_police, FolderPaths::KK_FILES),
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment
        ];

        $existingLeadDataCounterOffered = LeadDataCounteroffered::where('leads_id', $leadId)->where('person_id', $personId)->first();
        
        if($existingLeadDataCounterOffered){
            $existingLeadDataCounterOffered->update($leadDataCounteroffered);
        }
    }

    public function createLeadDataFahrzeug($leadId, $personId, Request $request)
    {
        $leadDataFahrzeug = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            // 'vehicle_id', ??
            'leasing' => $request->leasing,
            'leasing_name' => $request->leasing_name,
            'year_of_purchase' => $request->year_of_purchase,
            'placing_on_the_market' => $request->placing_on_the_market,
            'insurance_date' => $request->insurance_date,
            'redeemed' => $this->storeFile($request->redeemed, FolderPaths::KK_FILES),
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

        if($leadDataFahrzeug){
            LeadDataFahrzeug::create($leadDataFahrzeug);
        }
    }

    public function updateLeadDataFahrzeug($leadId, $personId, Request $request)
    {
        $leadDataFahrzeug = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            // 'vehicle_id', ??
            'leasing' => $request->leasing,
            'leasing_name' => $request->leasing_name,
            'year_of_purchase' => $request->year_of_purchase,
            'placing_on_the_market' => $request->placing_on_the_market,
            'insurance_date' => $request->insurance_date,
            'redeemed' => $this->storeFile($request->redeemed, FolderPaths::KK_FILES),
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

        $existingLeadDataFahrzeug = LeadDataFahrzeug::where('leads_id', $leadId)->where('person_id', $personId)->first();
        
        if($existingLeadDataFahrzeug){
            $existingLeadDataFahrzeug->update($leadDataFahrzeug);
        }
    }

    public function createLeadDataThings($leadId, $personId, Request $request)
    {
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

        LeadDataThings::create($leadDataThings);
    }

    public function updateLeadDataThings($leadId, $personId, Request $request)
    {
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

        $existingLeadDataThings = LeadDataThings::where('leads_id', $leadId)->where('person_id', $personId)->first();

        if($existingLeadDataThings){
            $existingLeadDataThings->update($leadDataThings);
        }
    }

    public function createLeadDataPrevention($leadId, $personId, Request $request)
    {
        $leadDataPrevention = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $this->storeFile($request->upload_police, FolderPaths::KK_FILES),
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment,
            'number_of_people' => $request->number_of_people,
            'number_of_rooms' => $request->number_of_rooms,
            'sum_insured' => $request->sum_insured,
            'desired_additional_coverage' => $request->desired_additional_coverage,
            'personal_liability' => $request->personal_liability,
            'society' => $request->society,
            'n_of_p_legal_protection' => $request->n_of_p_legal_protection,
        ];

        if($leadDataPrevention){
            LeadDataPrevention::create($leadDataPrevention);
        }
    }

    public function updateLeadDataPrevention($leadId, $personId, Request $request)
    {
        $leadDataPrevention = [
            'leads_id' => $leadId,
            'person_id' => $personId,
            'upload_police' => $this->storeFile($request->upload_police, FolderPaths::KK_FILES),
            'comparison_type' => $request->comparison_type,
            'comment' => $request->comment,
            'number_of_people' => $request->number_of_people,
            'number_of_rooms' => $request->number_of_rooms,
            'sum_insured' => $request->sum_insured,
            'desired_additional_coverage' => $request->desired_additional_coverage,
            'personal_liability' => $request->personal_liability,
            'society' => $request->society,
            'n_of_p_legal_protection' => $request->n_of_p_legal_protection,
        ];

        $existingLeadDataPrevention = LeadDataPrevention::where('leads_id', $leadId)->where('person_id', $personId)->first();
        
        if($existingLeadDataPrevention){
            $existingLeadDataPrevention->update($leadDataPrevention);
        }
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
}
