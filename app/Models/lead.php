<?php

namespace App\Models;

use App\Imports\leadinfo;
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
            'time',
            'wantsonline'
        ];

    public function campaign(){
        return $this->belongsTo(campaigns::class);
    }

    public function family(){
        return $this->hasMany(family::class, 'leads_id');
    }
    public function info(){
        return $this->belongsTo(lead_info::class,'id','lead_id');
    }
    public function admin(){
        return $this->belongsTo(Admins::class,'assign_to_id','id');
    }
    
}
