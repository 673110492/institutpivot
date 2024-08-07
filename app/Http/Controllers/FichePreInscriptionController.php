<?php

namespace App\Http\Controllers;

use App\Models\FichePreInscription;
use Illuminate\Http\Request;

class FichePreInscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fiche = FichePreInscription::latest()->paginate(15);
        // dd($fiche);
        return view('admin.fiche_pre_inscription.index',compact('fiche'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'photo' => 'required'
        ]);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $fiche = FichePreInscription::create($requestData);
        return to_route('fiche.index')->with('message', 'fiche ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FichePreInscription $fichePreInscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $fiche = FichePreInscription::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $fiche->update($requestData);

        return back()->with('message', 'fiche modifiée avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fiche = FichePreInscription::findOrFail($id);
        $fiche->delete();
        return back()->with('message', 'Suppression effectuée avec succes');
    }

    public function statut($id)
    {
        $fiche = FichePreInscription::findOrFail($id);
        if($fiche->statut == true){
            $fiche->update(['statut' => false]);
            return back()->with('message', 'fiche désactivé avec succes!');
        }else{
            $fiche1 = FichePreInscription::where('statut',true)->get();
            if($fiche1->count() != 0){
                foreach($fiche1 as $item){
                    $item->update(['statut' => false]);
                }
            }
            $fiche->update(['statut' => true]);
            return back()->with('message', 'fiche activé avec succes!');
        }
    }
}
