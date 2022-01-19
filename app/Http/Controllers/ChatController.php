<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Musonza\Chat\Chat;


class ChatController extends Controller
{
 public function chat(){
    return view('chat');
 }

}
