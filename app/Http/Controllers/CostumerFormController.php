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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CostumerFormController extends Controller
{
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

        $grundversicherung->save();

        $hausrat->person_idH = $id;
        $hausrat->societyH = $request->societyH;
        $hausrat->kvg_premiumH = $request->kvg_premiumH;
        $hausrat->modification_dateH = $request->modification_dateH;
        $hausrat->provisionH = $request->provisionH;
        $hausrat->cidH = $request->cidH;

        $hausrat->save();

        $retchsschutz->person_idR = $id;
        $retchsschutz->productR = $request->productR;
        $retchsschutz->durationR = $request->durationR;
        $retchsschutz->statusR = $request->statusR;
        $retchsschutz->modification_dateR = $request->modification_dateR;
        $retchsschutz->provisionR = $request->provisionR;
        $retchsschutz->cidR = $request->cidR;

        $retchsschutz->save();

        $vorsorge->person_idV = $id;
        $vorsorge->societyV = $request->societyV;
        $vorsorge->productionV = $request->productionV;
        $vorsorge->statusV = $request->statusV;
        $vorsorge->modification_dateV = $request->modification_dateV;
        $vorsorge->provisionV = $request->provisionV;
        $vorsorge->cidV = $request->cidV;

        $vorsorge->save();

        $zusatzversicherung->person_idZ = $id;
        $zusatzversicherung->societyZ = $request->societyZ;
        $zusatzversicherung->vvg_premiumZ = $request->vvg_premiumZ;
        $zusatzversicherung->statusZ = $request->statusZ;
        $zusatzversicherung->modification_dateZ = $request->modification_dateZ;
        $zusatzversicherung->provisionZ = $request->provisionZ;
        $zusatzversicherung->cidZ = $request->cidZ;

        $zusatzversicherung->save();

        $grundversicherungP->person_id_PG = $id;
        $grundversicherungP->graduation_date_PG = $request->graduation_date_PG;
        $grundversicherungP->society_PG = $request->society_PG;
        $grundversicherungP->product_PG = $request->product_PG;
        $grundversicherungP->status_PG = $request->status_PG;
        $grundversicherungP->last_adjustment_PG = $request->last_adjustment_PG;
        $grundversicherungP->total_commisions_PG = $request->total_commisions_PG;

        $grundversicherungP->save();

        $retchsschutzP->person_id_PR = $id;
        $retchsschutzP->graduation_date_PR = $request->graduation_date_PR;
        $retchsschutzP->society_PR = $request->society_PR;
        $retchsschutzP->produkt_PR = $request->produkt_PR;
        $retchsschutzP->status_PR   = $request->status_PR;
        $retchsschutzP->last_adjustment_PR = $request->last_adjustment_PR;
        $retchsschutzP->total_commisions_PR = $request->total_commisions_PR;

        $retchsschutzP->save();

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

        $vorsorgeP->save();

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

        $zusatzversicherungP->save();

        return redirect()->back()->with('success', 'U kry');






    }
}
