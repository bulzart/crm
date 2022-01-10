<?php

namespace App\Imports;

use App\Models\lead;
use Dotenv\Validator;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class LeadImport implements ToModel,ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new lead([

        ]);
    }

    public function collection(Collection $rows)
    {
//        Validator::make($rows->toArray(),[
//            '*.fname' => 'required',
//            '*.lname' => 'required',
//            '*.phone' => 'required',
//            '*.address' => 'required',
//            '*.postal' => 'required',
//            '*.location' => 'required',
//            '*.count' => 'min:1',
//            '*.apptime' => 'required',
//            '*.appbirthdate' => 'required'
//        ])->validate();
        foreach ($rows as $row){
            lead::create([
                'fname' => $row['first_name'],
                'lname' => $row['last_name'],
                'phone' => $row['telephone'],
                'birthdate' => $row['birthdate'],
                'city' => $row['city'],
                'address' => $row['address'],
                'postal' => $row['postal_code'],
                'location' => $row['first_name'],
                'count' => $row['first_name'],
                'apptime' => $row['first_name'],
                'appbirthdate' => $row['first_name']
            ]);
        }
    }
}
