<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Produit;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    public function add_reservation_view(){
        return view('admin/reservations');
    }
    public function get_reservations(){
        $reservs = Reservation::all();
        $produit_id = Reservation::select('produit_id')->pluck('produit_id');
        $vente_produit = [];
        for($x = 0; $x <= count($produit_id) - 1; $x++){
            $vente_produit[$x] = Produit::where('id_produit', $produit_id[$x])->value('nom');
        }

        return view('admin/reservations', compact('reservs', 'vente_produit'));
    }
    public function get_reservation(){
        return view('admin/reservations');
    }
    public function add_reservation(Request $req){

        $this->validate($req, [
            'nom' => 'required',
            'email' => 'required|email',
            'numero' => 'required',
            'pref' => 'required|max:250',
        ]);

        $nom = $req->request->get('nom');
        $email = $req->request->get('email');
        $num = $req->request->get('numero');
        $pref = $req->request->get('pref');
        
        try {
            DB::table('reservation')->insert([
                'nom_client' => $nom,
                'mail_client' => $email,
                'numero_client' => $num,
                'preference_client' => $pref,
                'created_at'=>now()
            ]);
            return back()->with('success','Réservation enregistrée avec succès. Vous recevrez un appel d\'ici peu !');
        } catch (Exception $x) {
            return back()->with('error','Echec de la réservation. veuillez réessayer!');
        }
       
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
