<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ordinateurController extends Controller
{
    public function ajouter (Request $req) {
        DB::insert("insert into ordinateurs (marque,prix,memoire,couleur)
        values ('$req->marque',
                $req->prix,
                $req->memoire,
                '$req->couleur')");
         $listOedinateurs=DB::select("select * from ordinateurs ");
        return view('listordinateur')->with('listOedinateurs',$listOedinateurs);
    }
    public function supprimer(Request $req) {
        DB::delete("delete from ordinateurs where id=$req->id");
        $listOedinateurs=DB::select("select * from ordinateurs ");
        return view('listordinateur')->with('listOedinateurs',$listOedinateurs);
    }
    public function formodifier (Request $req) {
        $modifierOrdinateurs=DB::select("select * from ordinateurs where id=$req->id ");
        return view('formModifier')->with('modifierOrdinateurs',$modifierOrdinateurs[0]);
    }
    public function modifier(Request $req) {
        DB::update("update ordinateurs set marque='$req->marque' , prix=$req->prix , memoire=$req->memoire , couleur='$req->couleur' 
        where id=$req->id");
        $listOedinateurs=DB::select("select * from ordinateurs ");
        return view('listordinateur')->with('listOedinateurs',$listOedinateurs);
    }
}
