<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\lead;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Admins;
use App\Models\campaigns;

class newlead implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
    public function model(array $row){
        return new lead([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'campaign_id' => campaigns::where('name',$row[2])->first() ? campaigns::where('name',$row[2])->first()->id : 1,
            'birthdate' => $row[3],
            'number_of_persons' => $row[4],
            'address' => $row[5],
            'telephone' => $row[6]
                  ]);
    }
}
