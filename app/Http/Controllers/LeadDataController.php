<?php

namespace App\Http\Controllers;

use App\Enums\FolderPaths;
use App\Models\LeadDataKK;
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
}
