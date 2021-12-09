<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rejectedlead extends Model
{
    use HasFactory;
    protected $table = 'rejectedleads';

    public function lead(){
        return $this->belongsTo(lead::class,'id');
    }
}
