<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('type','enseignant')->get();
        $formations = Formation::all();
        return view('admin.formations.index', compact('formations','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('type','enseignant')->get();
        return view('admin.formations.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required',
            'duree'  => 'required'
        ]);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $formation = Formation::create($requestData);
        return to_route('formation.index')->with('message', 'Formation ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $formation = Formation::findOrFail($id);
        $user = User::findOrFail($formation->user_id);
        return view('admin.formations.show', compact('user','formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        $users = User::where('type','enseignant')->get();
        return view('admin.formations.edit', compact('users','formation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // dd($request);
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix' => 'required',
            'duree'  => 'required',
            'description' => 'required'
        ]);
        $formation = Formation::findOrFail($id);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $formation->update($requestData);
        return to_route('formation.index')->with('message', 'Formation modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }
    public function statut($id)
    {
        $formation = Formation::findOrFail($id);
        if($formation->statut == true){
            $formation->update(['statut' => false]);
            return back()->with('message', 'formation désactivée avec succes!');
        }else{
            $formation->update(['statut' => true]);
            return back()->with('message', 'formation activée avec succes!');
        }
    }
}
