<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function add_message_view()
    {
        return view('admin/messages');
    }

    public function get_messages()
    {
        $msgs = Message::all();

        return view('admin/messages', compact('msgs'));
    }

    public function get_message()
    {
        return view('admin/messages');
    }

    public function add_message(Request $request)
    {
        $nom = $request->get('nom');
        $email = $request->get('email');
        $objet = $request->get('objet');
        $contenu = $request->get('contenu');
        try {
            DB::table('message')->insert([
                'nom' => $nom,
                'email' => $email,
                'sujet' => $objet,
                'contenu' => $contenu,
                'created_at' => now()
            ]);
            return back()->with('success','Méssage envoyé avec succes');
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'envoi');
        }
    }

    public function delete_message(Request $req)
    {
        $msg = $req->request->get('msg');
        //dd($msg);
        Message::where('id_message', $msg)->delete();

        return back()->with('success', 'Message Supprime !');
    }

    public function edit_message()
    {
        return view('admin/messages');
    }
}
