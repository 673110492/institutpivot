<?php

namespace App\Http\Controllers\Admin;

use App\Models\PreInscription;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeFormationRequest;
use App\Http\Requests\UpdateTypeFormationRequest;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Form;
use App\Models\formation_types;
use App\Models\TypeFormation;

class PreInscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pre_inscriptions = PreInscription::all();

        return view('admin.pre_inscriptions.index', compact('pre_inscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_formations = TypeFormation::all();
        $formations = Formation::all();
        foreach($formations as $item){

            $types=formation_types::where('formation_id',$item->id)->get();
            // dd($types);
            foreach($types as $it){
                $type=typeFormation::findOrFail($it->type_formation_id);
                $it->nom = $type->nom;
            }
            $item->types=$types;

        }

        return view('admin.pre_inscriptions.create',compact('type_formations','formations'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',

        ]);
        $data = $request->all();
        PreInscription::create($data);
        return to_route('pre_inscription.index')->with('message', 'Type formation ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pre_inscriptions = PreInscription::findOrFail($id);
        return view('admin.pre_inscriptions.show', compact('pre_inscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pre_inscriptions = PreInscription::findOrFail($id);
        return view('admin.pre_inscriptions.edit', compact('pre_inscriptions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',

        ]);
        $recup = $request->all();
        $pre_inscriptions = PreInscription::findOrFail($id);
        $pre_inscriptions->update($recup);
        return to_route('pre_inscription.index')->with('message', 'Etudiant modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $pre_inscriptions = PreInscription::findOrFail($id);
        $pre_inscriptions->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }

    public function statut($id)
    {
        $formation = PreInscription::findOrFail($id);
        if($formation->statut == true){
            $formation->update(['statut' => false]);
            return back()->with('message', 'formation désactivée avec succes!');
        }else{
            $formation->update(['statut' => true]);
            return back()->with('message', 'formation activée avec succes!');
        }
    }
}
