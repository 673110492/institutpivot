<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Apropos;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apropos = Apropos::all();
        return view('admin.apropos.index',compact('apropos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.apropos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'photo' => 'required',
            'photo2' => 'required',
            'contenu' => 'required'
        ]);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        if ($request->hasFile('photo2')) {
            $requestData['photo2'] = $request->file('photo2')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $apropos = Apropos::create($requestData);
        return to_route('apropos.index')->with('message', 'Ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apropos $apropos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $apropos = Apropos::findOrFail($id);
        return view('admin.apropos.edit',compact('apropos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required'
        ]);
        $apropos = Apropos::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        if ($request->hasFile('photo2')) {
            $requestData['photo2'] = $request->file('photo2')
            ->store('uploads', 'public');
        }
        $apropos->update($requestData);

        return to_route('apropos.index')->with('message', 'Modifiée avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $apropos = Apropos::findOrFail($id);
        $apropos->delete();
        return back()->with('message', 'Suppression effectuée avec succes');
    }
    public function statut($id)
    {
        $apropos = Apropos::findOrFail($id);
        if($apropos->statut == true){
            $apropos->update(['statut' => false]);
            return back()->with('message', 'Désactivé avec succes!');
        }else{
            $apropos1 = Apropos::where('statut',true)->get();
            if($apropos1->count() != 0){
                foreach($apropos1 as $item){
                    $item->update(['statut' => false]);
                }
            }
            $apropos->update(['statut' => true]);
            return back()->with('message', 'Activé avec succes!');
        }
    }
}
