<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadDataFahrzeug extends Model
{
    use HasFactory;

    protected $table = 'lead_data_fahrzeug';

    protected $fillable = [
        'leads_id',
        'person_id',
        'upload_police',
        'vehicle_id',
        'leasing',
        'leasing_name',
        'year_of_purchase',
        'placing_on_the_market',
        'insurance_date',
        'redeemed',
        'km_stood',
        'issue_date',
        'nationality',
        'most_common',
        'insurance',
        'deductible',
        'carried',
        'repair_shop',
        'accident_coverage',
        'traffic_legal_protection',
        'grossly',
        'glass_protection',
        'parking_damage',
        'hour_breakdown_assistance',
        'comment'
    ];
}
