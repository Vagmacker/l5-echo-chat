<?php

namespace App\Http\Controllers;

use App\Model\Room;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoomsController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }
}
