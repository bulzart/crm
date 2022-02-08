<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;
    protected $table = 'todos';

    protected $fillable = [
        'admin_id',
        'pendency_id',
        'costumer',
        'text',
        'comment',
        'number',
        'done'
    ];
}
