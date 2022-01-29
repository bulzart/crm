<?php

namespace App\Http\Controllers;

use App\Models\CostumerProduktGrundversicherung;
use App\Models\CostumerProduktRechtsschutz;
use App\Models\CostumerProduktVorsorge;
use App\Models\CostumerProduktZusatzversicherung;
use App\Models\CostumerStatusGrundversicherung;
use App\Models\CostumerStatusHausrat;
use App\Models\CostumerStatusRetchsschutz;
use App\Models\CostumerStatusVorsorge;
use App\Models\CostumerStatusZusatzversicherung;
use App\Models\family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CostumerFormController extends Controller
{
    public function costumer_form($id){
        $id = Crypt::decrypt($id) / 1244;

        if(Auth::guard('admins')->user()->hasRole('backoffice') ||Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('salesmanager') ||Auth::guard('admins')->user()->hasRole('fs') || Auth::guard('admins')->user()->hasRole('management')){
            $family = family::where('id',$id)->first();
            if ($family->kundportfolio == 0 && (Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice'))) {
                $costumer = family::findOrFail($id);
                return view('costumer_form')->with(compact('costumer'));
            }else{
                if(Auth::guard('admins')->user()->hasRole('admin') || Auth::guard('admins')->user()->hasRole('backoffice')) {
                    $grundversicherung = CostumerStatusGrundversicherung::where('person_idG', $id)->first();
                    $hausrat = CostumerStatusHausrat::where('person_idH', $id)->first();
                    $retchsschutz = CostumerStatusRetchsschutz::where('person_idR', $id)->first();
                    $vorsorge = CostumerStatusVorsorge::where('person_idV', $id)->first();
                    $zusatzversicherung = CostumerStatusZusatzversicherung::where('person_idZ', $id)->first();
                    $grundversicherungP = CostumerProduktGrundversicherung::where('person_id_PG', $id)->first();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('person_id_PR', $id)->first();
                    $vorsorgeP = CostumerProduktVorsorge::where('person_id_PV', $id)->first();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('person_id_PZ', $id)->first();
                    $costumer = family::findOrFail($id);
                    return view('edit_costumer_form')
                        ->with(compact('costumer', 'grundversicherung',
                            'hausrat', 'retchsschutz', 'vorsorge',
                            'zusatzversicherung', 'grundversicherungP',
                            'retchsschutzP', 'vorsorgeP', 'zusatzversicherungP'));

                }
                if(Auth::guard('admins')->user()->hasRole('salesmanager') || Auth::guard('admins')->user()->hasRole('fs')|| Auth::guard('admins')->user()->hasRole('management')){
                    $grundversicherung = CostumerStatusGrundversicherung::where('person_idG', $id)->first();
                    $hausrat = CostumerStatusHausrat::where('person_idH', $id)->first();
                    $retchsschutz = CostumerStatusRetchsschutz::where('person_idR', $id)->first();
                    $vorsorge = CostumerStatusVorsorge::where('person_idV', $id)->first();
                    $zusatzversicherung = CostumerStatusZusatzversicherung::where('person_idZ', $id)->first();
                    $grundversicherungP = CostumerProduktGrundversicherung::where('person_id_PG', $id)->first();
                    $retchsschutzP = CostumerProduktRechtsschutz::where('person_id_PR', $id)->first();
                    $vorsorgeP = CostumerProduktVorsorge::where('person_id_PV', $id)->first();
                    $zusatzversicherungP = CostumerProduktZusatzversicherung::where('person_id_PZ', $id)->first();
                    $costumer = family::findOrFail($id);

                    return view('view_costumer_form')
                        ->with(compact('costumer', 'grundversicherung',
                            'hausrat', 'retchsschutz', 'vorsorge',
                            'zusatzversicherung', 'grundversicherungP',
                            'retchsschutzP', 'vorsorgeP', 'zusatzversicherungP'));
                }
            }
        }else{
            echo 'You Dont Have Permissions To Access In This Page';
        }
    }


    public function save_costumer_form(Request $request, $id){
        $id = Crypt::decrypt($id) / 1244;

        $grundversicherung = new CostumerStatusGrundversicherung();
        $hausrat = new CostumerStatusHausrat();
        $retchsschutz = new CostumerStatusRetchsschutz();
        $vorsorge = new CostumerStatusVorsorge();
        $zusatzversicherung = new CostumerStatusZusatzversicherung();

        $grundversicherungP = new CostumerProduktGrundversicherung();
        $retchsschutzP = new CostumerProduktRechtsschutz();
        $vorsorgeP = new CostumerProduktVorsorge();
        $zusatzversicherungP = new CostumerProduktZusatzversicherung();



            $grundversicherung->person_idG = $id;
            $grundversicherung->societyG = $request->societyG;
            $grundversicherung->kvg_premiumG = $request->kvg_premiumG;
            $grundversicherung->statusG = $request->statusG;
            $grundversicherung->modification_dateG = $request->modification_dateG;
            $grundversicherung->provisionG = $request->provisionG;
            $grundversicherung->cidG = $request->cidG;


            $hausrat->person_idH = $id;
            $hausrat->societyH = $request->societyH;
            $hausrat->kvg_premiumH = $request->kvg_premiumH;
            $hausrat->modification_dateH = $request->modification_dateH;
            $hausrat->provisionH = $request->provisionH;
            $hausrat->cidH = $request->cidH;


            $retchsschutz->person_idR = $id;
            $retchsschutz->productR = $request->productR;
            $retchsschutz->durationR = $request->durationR;
            $retchsschutz->statusR = $request->statusR;
            $retchsschutz->modification_dateR = $request->modification_dateR;
            $retchsschutz->provisionR = $request->provisionR;
            $retchsschutz->cidR = $request->cidR;



            $vorsorge->person_idV = $id;
            $vorsorge->societyV = $request->societyV;
            $vorsorge->productionV = $request->productionV;
            $vorsorge->statusV = $request->statusV;
            $vorsorge->modification_dateV = $request->modification_dateV;
            $vorsorge->provisionV = $request->provisionV;
            $vorsorge->cidV = $request->cidV;




            $zusatzversicherung->person_idZ = $id;
            $zusatzversicherung->societyZ = $request->societyZ;
            $zusatzversicherung->vvg_premiumZ = $request->vvg_premiumZ;
            $zusatzversicherung->statusZ = $request->statusZ;
            $zusatzversicherung->modification_dateZ = $request->modification_dateZ;
            $zusatzversicherung->provisionZ = $request->provisionZ;
            $zusatzversicherung->cidZ = $request->cidZ;



            $grundversicherungP->person_id_PG = $id;
            $grundversicherungP->graduation_date_PG = $request->graduation_date_PG;
            $grundversicherungP->society_PG = $request->society_PG;
            $grundversicherungP->product_PG = $request->product_PG;
            $grundversicherungP->status_PG = $request->status_PG;
            $grundversicherungP->last_adjustment_PG = $request->last_adjustment_PG;
            $grundversicherungP->total_commisions_PG = $request->total_commisions_PG;



            $retchsschutzP->person_id_PR = $id;
            $retchsschutzP->graduation_date_PR = $request->graduation_date_PR;
            $retchsschutzP->society_PR = $request->society_PR;
            $retchsschutzP->produkt_PR = $request->produkt_PR;
            $retchsschutzP->status_PR = $request->status_PR;
            $retchsschutzP->last_adjustment_PR = $request->last_adjustment_PR;
            $retchsschutzP->total_commisions_PR = $request->total_commisions_PR;



            $vorsorgeP->person_id_PV = $id;
            $vorsorgeP->graduation_date_PV = $request->graduation_date_PV;
            $vorsorgeP->begin_PV = $request->begin_PV;
            $vorsorgeP->society_PV = $request->society_PV;
            $vorsorgeP->pramie_PV = $request->pramie_PV;
            $vorsorgeP->payment_rythm_PV = $request->payment_rythm_PV;
            $vorsorgeP->duration_from_PV = $request->duration_from_PV;
            $vorsorgeP->duration_to_PV = $request->duration_to_PV;
            $vorsorgeP->production_PV = $request->production_PV;
            $vorsorgeP->status_PV = $request->status_PV;
            $vorsorgeP->last_adjustment_PV = $request->last_adjustment_PV;
            $vorsorgeP->total_commisions_PV = $request->total_commisions_PV;




            $zusatzversicherungP->person_id_PZ = $id;
            $zusatzversicherungP->graduation_date_PZ = $request->graduation_date_PZ;
            $zusatzversicherungP->society_PZ = $request->society_PZ;
            $zusatzversicherungP->produkt_PZ = $request->produkt_PZ;
            $zusatzversicherungP->vvg_premium_PZ = $request->vvg_premium_PZ;
            $zusatzversicherungP->duration_from_PZ = $request->duration_from_PZ;
            $zusatzversicherungP->duration_to_PZ = $request->duration_to_PZ;
            $zusatzversicherungP->status_PZ = $request->status_PZ;
            $zusatzversicherungP->last_adjustment_PZ = $request->last_adjustment_PZ;
            $zusatzversicherungP->provision_PZ = $request->provision_PZ;
            $zusatzversicherungP->produkt_PZ2 = $request->produkt_PZ2;
            $zusatzversicherungP->vvg_premium_PZ2 = $request->vvg_premium_PZ2;
            $zusatzversicherungP->duration_from_PZ2 = $request->duration_from_PZ2;
            $zusatzversicherungP->duration_to_PZ2 = $request->duration_to_PZ2;
            $zusatzversicherungP->status_PZ2 = $request->status_PZ2;
            $zusatzversicherungP->last_adjustment_PZ2 = $request->last_adjustment_PZ2;
            $zusatzversicherungP->provision_PZ2 = $request->provision_PZ2;
            $zusatzversicherungP->total_commisions_PZ = $request->total_commisions_PZ;


        if($grundversicherung->save() && $hausrat->save() && $retchsschutz->save() && $vorsorge->save() &&
            $zusatzversicherung->save() && $grundversicherungP->save() && $retchsschutzP->save() && $vorsorgeP->save() &&$zusatzversicherungP->save()) {
            family::where('id',$id)->update(['kundportfolio'=>1]);
            return redirect()->route('costumers')->with('success', 'Action Successfully Made');
        }else{
            return redirect()->back()->with('fail', 'Action Not Done');
        }

    }

    public function edit_costumer_kundportfolio(Request $request, $id){
        $id = Crypt::decrypt($id) / 1244;


        $grundversicherung = CostumerStatusGrundversicherung::where('person_idG',$id)->update([
           'societyG'=> $request->societyG,
           'kvg_premiumG' => $request->kvg_premiumG,
           'statusG'=> $request->statusG,
           'modification_dateG'=> $request->modification_dateG,
           'provisionG'=> $request->provisionG,
           'cidG'=> $request->cidG,
        ]);
        $hausrat = CostumerStatusHausrat::where('person_idH',$id)->update([
            'societyH'=> $request->societyH,
            'kvg_premiumH' => $request->kvg_premiumH,
            'modification_dateH'=> $request->modification_dateH,
            'provisionH'=> $request->provisionH,
            'cidH'=> $request->cidH,
        ]);
        $retchsschutz = CostumerStatusRetchsschutz::where('person_idR',$id)->update([
            'productR'=> $request->productR,
            'durationR' => $request->durationR,
            'statusR'=> $request->statusR,
            'modification_dateR'=> $request->modification_dateR,
            'provisionR'=> $request->provisionR,
            'cidR'=> $request->cidR,
        ]);

        $vorsorge = CostumerStatusVorsorge::where('person_idV',$id)->update([
            'societyV'=> $request->societyV,
            'productionV' => $request->productionV,
            'statusV'=> $request->statusV,
            'modification_dateV'=> $request->modification_dateV,
            'provisionV'=> $request->provisionV,
            'cidV'=> $request->cidV,
        ]);

        $zusatzversicherung = CostumerStatusZusatzversicherung::where('person_idZ',$id)->update([
            'societyZ'=> $request->societyZ,
            'vvg_premiumZ' => $request->vvg_premiumZ,
            'statusZ'=> $request->statusZ,
            'modification_dateZ'=> $request->modification_dateZ,
            'provisionZ'=> $request->provisionZ,
            'cidZ'=> $request->cidZ,
        ]);

        $grundversicherungP = CostumerProduktGrundversicherung::where('person_id_PG',$id)->update([
            'graduation_date_PG'=> $request->graduation_date_PG,
            'society_PG' => $request->society_PG,
            'product_PG'=> $request->product_PG,
            'status_PG'=> $request->status_PG,
            'last_adjustment_PG'=> $request->last_adjustment_PG,
            'total_commisions_PG' => $request->total_commisions_PG,
        ]);
        $retchsschutzP = CostumerProduktRechtsschutz::where('person_id_PR',$id)->update([
            'graduation_date_PR'=> $request->graduation_date_PR,
            'society_PR' => $request->society_PR,
            'produkt_PR'=> $request->produkt_PR,
            'status_PR'=> $request->status_PR,
            'last_adjustment_PR'=> $request->last_adjustment_PR,
            'total_commisions_PR'=> $request->total_commisions_PR,
        ]);

        $vorsorgeP = CostumerProduktVorsorge::where('person_id_PV',$id)->update([
            'graduation_date_PV'=> $request->graduation_date_PV,
            'begin_PV' => $request->begin_PV,
            'society_PV'=> $request->society_PV,
            'pramie_PV'=> $request->pramie_PV,
            'payment_rythm_PV'=> $request->payment_rythm_PV,
            'duration_from_PV'=> $request->duration_from_PV,
            'duration_to_PV'=> $request->duration_to_PV,
            'production_PV'=> $request->production_PV,
            'status_PV'=> $request->status_PV,
            'last_adjustment_PV'=> $request->last_adjustment_PV,
            'total_commisions_PV'=> $request->total_commisions_PV,
        ]);

        $zusatzversicherungP = CostumerProduktZusatzversicherung::where('person_id_PZ',$id)->update([
            'graduation_date_PZ'=> $request->graduation_date_PZ,
            'society_PZ' => $request->society_PZ,
            'produkt_PZ'=> $request->produkt_PZ,
            'vvg_premium_PZ'=> $request->vvg_premium_PZ,
            'duration_from_PZ'=> $request->duration_from_PZ,
            'duration_to_PZ'=> $request->duration_to_PZ,
            'status_PZ'=> $request->status_PZ,
            'last_adjustment_PZ'=> $request->last_adjustment_PZ,
            'provision_PZ'=> $request->provision_PZ,
            'produkt_PZ2'=> $request->produkt_PZ2,
            'vvg_premium_PZ2'=> $request->vvg_premium_PZ2,
            'duration_from_PZ2'=> $request->duration_from_PZ2,
            'duration_to_PZ2'=> $request->duration_to_PZ2,
            'status_PZ2'=> $request->status_PZ2,
            'last_adjustment_PZ2'=> $request->last_adjustment_PZ2,
            'provision_PZ2'=> $request->provision_PZ2,
            'total_commisions_PZ'=> $request->total_commisions_PZ,
        ]);

        return redirect()->route('costumers')->with('success' , 'Your changes has been successfully done');



    }

}
