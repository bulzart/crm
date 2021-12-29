<?php

namespace App\Http\Controllers;

use App\Exports\LeadsExport;
use App\Models\Admins;
use App\Models\appointment;
use App\Models\lead;
use App\Models\family;
use App\Models\notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Name\FullyQualified;

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
}



