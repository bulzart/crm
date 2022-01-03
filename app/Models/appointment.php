<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $table = 'csapp';

    protected $hidden = 'unsigned_data';

    protected $fillable = [
      'lead_id',
      'name',
      'lname',
      'birthday',
      'family'
    ];

    function lead(){
        return $this->belongsTo(lead::class);
    }
}
