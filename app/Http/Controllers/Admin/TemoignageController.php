<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Temoignage;
use App\Models\Formation;
use Illuminate\Http\Request;

class TemoignageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        $temoignages = Temoignage::where('fonction','code')->get();
        foreach($temoignages as $item){
            if(isset($item->formation_id)){
                $item->formation = Formation::findOrFail($item->formation_id);
            }
        }
        return view('admin.temoignage-etudiant.index', compact('temoignages','formations'));
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
            'nom' => 'required|string|max:255',
            'description' => 'required'
        ]);
        $requestData = $request->except('token');
        $requestData['fonction'] = 'code';
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $temoignage = Temoignage::create($requestData);
        return to_route('temoignage.index')->with('message', 'Temoignage ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Temoignage $temoignage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Temoignage $temoignage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $temoignage = Temoignage::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $temoignage->update($requestData);

        return back()->with('message', 'Temoignage modifié avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $temoignage = Temoignage::findOrFail($id);
        $temoignage->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }
    public function statut($id)
    {
        $temoignage = Temoignage::findOrFail($id);
        if($temoignage->statut == true){
            $temoignage->update(['statut' => false]);
            return back()->with('message', 'temoignage désactivé avec succes!');
        }else{
            $temoignage->update(['statut' => true]);
            return back()->with('message', 'temoignage activé avec succes!');
        }
    }
}
