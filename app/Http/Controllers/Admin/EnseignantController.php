<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formateurs = User::where('type', 'enseignant')->get();
        return view('admin.formateurs.index', compact('formateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.formateurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'noms' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'tel1'  => 'required|unique:users'
        ]);
        $requestData = $request->except('token');
        $requestData['type'] = 'enseignant';
        $requestData['password'] = '12345';
        if ($request->hasFile('cv')) {
            $requestData['cv'] = $request->file('cv')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photocopie_cni')) {
            $requestData['photocopie_cni'] = $request->file('photocopie_cni')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('avatar')) {
            $requestData['avatar'] = $request->file('avatar')
                ->store('uploads', 'public');
        }
        // dd($requestData);
        $enseignant = User::create($requestData);
        return to_route('formateur.index')->with('message', 'Formateur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $formateur = User::findOrFail(1);
        return view('admin.formateurs.edit', compact('formateur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $enseignant = User::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('cv')) {
            $requestData['cv'] = $request->file('cv')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('avatar')) {
            $requestData['avatar'] = $request->file('avatar')
                ->store('uploads', 'public');
        }
        if ($request->hasFile('photocopie_cni')) {
            $requestData['photocopie_cni'] = $request->file('photocopie_cni')
                ->store('uploads', 'public');
        }
        $enseignant->update($requestData);

        return back()->with('message', 'Formateur modifier avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $enseignant = User::findOrFail($id);
        $enseignant->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }
}
