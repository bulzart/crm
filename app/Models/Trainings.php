<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainings extends Model
{
    use HasFactory;

    protected $table = 'trainings';
<<<<<<< HEAD
=======
    public $timestamps = false;
>>>>>>> c7c3bbe8dc313c2ee71ba4a4b8de02b14a8b05c3

    protected $fillable = [
        'text',
        'admin_id',
        'role'
    ];
}
