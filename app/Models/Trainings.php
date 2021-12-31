<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    use HasFactory;

    protected $table = 'trainings';
    public $timestamps = false;

    protected $fillable = [
        'text',
        'admin_id',
        'role'
    ];
}
