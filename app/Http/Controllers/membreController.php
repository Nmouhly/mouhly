<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class membreController extends Controller
{
    //pemet dajouter des datat directement dans la base de data
    public function addmembre(Request $request){

        $request->validate(
        ['first'=>'required',
        'last'=>'required',
        'email'=>'required',
        'status'=>'required',
        
        ]
        );
        $M = new Member();
        $M->first_name=$request->first;
        $M->last_name=$request->last;
        $M->email=$request->email;
        $M->status=$request->status;
        $M->team_id=$request->team;
       
        if($M->save()){
            return redirect('/membre/list')->with('msge','le membre est ajouté avec succes');;
        }
        else{
            return 'erreur lors de l\'ajout ';
        }
    }


    public function ShowFormMembre(){
        return view('membre.form');
    }
    public function formupdate($id){
        $membres=Member::find($id);
        return view('membre.formupdate',compact('membres'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email',
            'status' => 'required',
        ]);

        $M = Member::find($request->id);
        if (!$M) {
            return redirect('/membre/list')->withErrors('Membre non trouvé.');
        }

        $M->first_name = $request->first;
        $M->last_name = $request->last;
        $M->email = $request->email;
        $M->status = $request->status;
        $M->team_id = $request->team;

        if ($M->save()) {
            return redirect('/membre/list')->with('msge', 'Le membre a été mis à jour avec succès.');
        } else {
            return 'Erreur lors de la mise à jour.';
        }
    }
    public function delete($id){
        $membres=Member::find($id);
         if($membres->delete()){
            return redirect('/membre/list')->with('msg','le membre est supprimé avec succes');
         }else{
            return 'probleme lors de la suppression';
         }
        
    }
    public function liste(){
        $membres=Member::all();
        return view('membre.liste')->with('membres',$membres);
    }
    public function getMembres()
    {
        $membres = Member::all();
        return response()->json($membres);
    }
    public function updateEtat(Request $request, $id)
{
    $membre = Member::findOrFail($id);
    $membre->etat = $request->etat;
    $membre->save();

    return response()->json(['message' => 'Etat mis à jour avec succès']);
}
public function indexActuels()
{
   
   $membre = Member::get()->where('etat','actuel');
    return response()->json($membre);
}

public function indexAnciens()
{
    $membres = Member::where('etat', 'ancien')->get();
    return response()->json($membres);
}
    public function show($id)
    {
        $newsItem = Member::find($id);

        if (!$newsItem) {
            return response()->json(['error' => 'News not found'], 404);
        }

        return response()->json($newsItem);
    }
}
