<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function add_reservation_view(){
        return view('admin/reservations');
    }
    public function get_reservations(){
        $reservs = Reservation::all();

        return view('admin/reservations', compact('reservs'));
    }
    public function get_reservation(){
        return view('admin/reservations');
    }
    public function add_reservation(){
        return view('admin/reservations');
    }
    public function delete_reservation(Request $req){
        $reserv = $req->request->get('reserv');
        //dd($msg);
        if(Reservation::where('id_reservation', $reserv)->delete()){ 
            return back()->with('success', 'Reservation Supprimee !');
        }else{
            return back()->with('error', 'Echec de la suppression.');
        }

    }
    public function edit_message(){
        return view('admin/reservations');
    }
}
