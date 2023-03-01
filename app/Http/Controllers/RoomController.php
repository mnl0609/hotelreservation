<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RoomController;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        //return 'Room';

        $data = Room::all();
        return view('room.index',['rooms'=>$data]);
    }
}
