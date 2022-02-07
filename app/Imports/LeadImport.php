<?php

namespace App\Imports;

use App\Models\Admins;
use App\Models\campaigns;
use App\Models\lead;
use Maatwebsite\Excel\Concerns\ToModel;

class LeadImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $latitude,$longitude;
    public $admin,$camp;

    public function latitudee($address1){
        $address = $address1;
        $url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=AIzaSyDscxZzYju_pJGNA2zu1lXOqJuubCdPu0o';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($responseJson);
        if ($response->status == 'OK') {
            $latitude = $response->results[0]->geometry->location->lat;
            $longitude = $response->results[0]->geometry->location->lng;
        }
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function model(array $row)
    {
        $this->latitudee($row[5]);
        $this->camp = campaigns::where('name',$row[10])->get();
        $this->admin = Admins::where('email',$row[11])->get();


        return new lead([
            'first_name' => $row[0],
            'last_name' => $row[1],
            'telephone' => $row[2],
            'birthdate' => $row[3],
            'city' => $row[4],
            'address' => $row[5],
            'postal_code' => $row[6],
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'number_of_persons' => $row[7],
            'nationality' => $row[8],
            'appointment_date' => $row[9],
            'campaign_id' => $this->camp[0]->id,
            'assign_to_id' => $this->admin[0]->id,
            'time' => $row[12],
            'assigned' => 1

        ]);
    }
}
