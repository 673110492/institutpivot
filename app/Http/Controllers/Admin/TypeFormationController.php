<?php

namespace App\Http\Controllers\Admin;

use App\Models\TypeFormation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypeFormationRequest;
use App\Http\Requests\UpdateTypeFormationRequest;
use Illuminate\Http\Request;

class TypeFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_formations = TypeFormation::all();
        return view('admin.type_formations.index', compact('type_formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type_formations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'duree' => 'required',
            'description'
        ]);
        $data = $request->all();
        TypeFormation::create($data);
        return to_route('type_formation.index')->with('message', 'Type formation ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $type_formation = TypeFormation::findOrFail($id);
        return view('admin.type_formations.show', compact('type_formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type_formation = TypeFormation::findOrFail($id);
        return view('admin.type_formations.edit', compact('type_formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $this->validate($request,[
            'nom' => 'required|string|max:255',
            'duree' => 'required',
            'description'=> 'required'
        ]);
        $recup = $request->all();
        $type_formation = TypeFormation::findOrFail($id);
        $type_formation->update($recup);
        return to_route('type_formation.index')->with('message', 'Type formation ajoutée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type_formation = TypeFormation::findOrFail($id);
        $type_formation->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }

    public function statut($id)
    {
        $formation = TypeFormation::findOrFail($id);
        if($formation->statut == true){
            $formation->update(['statut' => false]);
            return back()->with('message', 'formation désactivée avec succes!');
        }else{
            $formation->update(['statut' => true]);
            return back()->with('message', 'formation activée avec succes!');
        }
    }
}
