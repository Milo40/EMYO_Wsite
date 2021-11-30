<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function add_utilisateur_view(){
        return view('admin/utilisateurs/ajout');
    }
    public function get_utilisateurs(){
        $users = Utilisateur::all();
        return view('admin/utilisateurs/liste', compact('users'));
    }
    public function get_utilisateur(){

    }

    public function add_utilisateur(Request $req){
        $user_name = $req->request->get('nom');
        $user_pseud = $req->request->get('pseudo');
        $user_mail = $req->request->get('email');
        $user_role = $req->request->get('role');
        $user_pwd = $req->request->get('password');
        $user_pwd_confirm = $req->request->get('repassword');
        $user_pwd_hash = Hash::make($user_pwd);
        $user_pwd_confirm_hash = Hash::make($user_pwd_confirm);
        if(Hash::check($user_pwd, $user_pwd_hash) && $user_pwd == $user_pwd_confirm){
        try {
            DB::table('utilisateur')->insert([
                'nom' => $user_name,
                'mail' => $user_mail,
                'password' => $user_pwd_hash,
                'uname' => $user_pseud,
                'role' => $user_role
            ]);
            return back()->with('success','Utilisateur OK');
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }else{
        return back()->with('error','Verifiez la similarite des mots de passe.');
    }
    }

    public function delete_utilisateur(){

    }
    public function edit_utilisateur(){
        return view('admin/utilisateurs/edit');
    }
}
