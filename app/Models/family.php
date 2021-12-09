<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class family extends Model
{
    use HasFactory;
    public $members;
    public $cnt = 0;
    public function __construct($old = null)
    {
        if($old != null){
            $this->members = $old->members;
        }
        else{
            $this->members = [];
        }
    }


    public function addmember($fname,$lname,$birthday){
        if($fname != null){
       $this->members[$this->cnt]['fname'] = $fname; 
    }
    if($lname != null){
        $this->members[$this->cnt]['lname'] = $lname;
    }
    if($birthday != null){
        $this->members[$this->cnt]['birthday'] = $birthday;
    }
    $this->cnt++;
}
}