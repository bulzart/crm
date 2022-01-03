<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lead extends Model
{
    use HasFactory;

    public function campaign(){
        return $this->belongsTo(campaigns::class);
    }

    public function family(){
        return $this->hasMany(family::class, 'leads_id');
    }
}
