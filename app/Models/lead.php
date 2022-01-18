<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'assigned',
        'first_name',
            'last_name',
            'telephone',
            'birthdate',
            'city',
            'address',
            'postal_code',
            'latitude',
            'longitude',
            'number_of_persons',
            'nationality',
            'appointment_date',
            'campaign_id',
            'assign_to_id',
            'time'
        ];

    public function campaign(){
        return $this->belongsTo(campaigns::class);
    }

    public function family(){
        return $this->hasMany(family::class, 'leads_id');
    }
}
