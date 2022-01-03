<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actions extends Model
{
    use HasFactory;

    public $name,$va,$total;
    public function __construct($old = null)
    {
        if($old != null){
            $this->name = $old->name;
            $this->val = $old->val;
            $this->total = $old->total;
        }
        else{
            $this->name = $this->val = $this->total = null;
        }
    }
}
