<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function add_img_view()
    {
        return view('admin/images/ajout');
    }

    public function img_view()
    {   
        $images=Image::all();
        return view('admin/images/liste',compact('images'));
    }

    public function add_img(Request $req)
    {
        $lib = $req->request->get('libelle');
        $leg = $req->request->get('legende');
        $allow_formats = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG', 'gif', 'GIF'];
        $format_check = explode(".", $lib);
        if(!in_array($format_check[0], $allow_formats)){
        try {

            $file=uniqid().".".$req->libelle->getClientOriginalName();
            $req->libelle->storeAs('galerie',$file,'public');

            DB::table('images')->insert([
                'legende' => $leg,
                'libelle' => $file,
                'created_at'=>now()
            ]);
            return back()->with('success','Image OK');
        } catch (Exception $x) {
            return back()->with('error','Echec de l\'ajout');
        }
    }else{
        return back()->with('error','Le format de l\'image est pas valide.');
    }

    }

    public function delete_img(Image $img)
    {
        try {
            $img->delete();
            return back()->with('success','Suppression  OK');
        } catch (Exception $x) {
            return back()->with('error','Echec de la suppression');
        }
    }
}
