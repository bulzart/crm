<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyPerson extends Model
{
    use HasFactory;

    protected $table = 'family_person';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthdate',
        'leads_id',
    ];

    public function lead(){
        return $this->belongsTo(lead::class,'leads_id');
    }
}
