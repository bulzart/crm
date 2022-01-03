<?php

namespace App\Imports;

use App\Models\leads;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class LeadsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new leads([
           'name' => $row['name'],
           'count' => $row['count'],
           'address' => $row['address'],
           'day' => Carbon::now()->dayName,
           'language' => $row['language'],
           'nationality' => $row['country'],
           'postcode' => $row['postcode'],
           'location' => $row['location'],
           'telprivat' => $row['phone'],
           'lname' => $row['lastname']
        ]);
    }
}
