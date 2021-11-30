<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function add_reservation_view(){
        return view('admin/reservations');
    }
    public function get_reservations(){
        return view('admin/reservations');
    }
    public function get_reservation(){
        return view('admin/reservations');
    }
    public function add_reservation(){
        return view('admin/reservations');
    }
    public function delete_reservation(){
        return view('admin/reservations');
    }
    public function edit_message(){
        return view('admin/reservations');
    }
}
