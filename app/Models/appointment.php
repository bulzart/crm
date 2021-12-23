<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $table = 'csapp';

    function lead(){
        return $this->belongsTo(lead::class);
    }
  protected $hidden = 'unsigned_data';
}
