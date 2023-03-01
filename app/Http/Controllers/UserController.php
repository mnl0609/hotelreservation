<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return view('room.user',['users'=>$data]);
    }
    
}
