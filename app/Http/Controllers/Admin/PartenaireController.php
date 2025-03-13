<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partenaires = Partenaire::all();
        return view('admin.partenaire.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partenaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:partenaires,email',
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image optionnelle
        ]);

        $partenaire = new Partenaire();
        $partenaire->nom = $request->nom;
        $partenaire->email = $request->email;
        $partenaire->telephone = $request->telephone;
        $partenaire->adresse = $request->adresse;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('partenaires', 'public');
            $partenaire->image = $imagePath;
        }

        $partenaire->save();

        return redirect('partenaires')->with('success', 'Partenaire créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view('admin.partenaire.show', compact('partenaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partenaire = Partenaire::findOrFail($id);
        return view('admin.partenaire.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:partenaires,email,' . $id,
            'telephone' => 'nullable|string|max:20',
            'adresse' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image optionnelle
        ]);

        // Mise à jour du partenaire
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->nom = $request->nom;
        $partenaire->email = $request->email;
        $partenaire->telephone = $request->telephone;
        $partenaire->adresse = $request->adresse;
        // Si une nouvelle image est téléchargée
        if ($request->hasFile('image')) {
            // Supprime l'ancienne image du dossier public
            if ($partenaire->image) {
                Storage::delete('public/' . $partenaire->image);
            }

            // Sauvegarde la nouvelle image
            $imagePath = $request->file('image')->store('partenaires', 'public');
            $partenaire->image = $imagePath;
        }

        $partenaire->save();

        return redirect()->route('admin.partenaires.index')->with('success', 'Partenaire mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partenaire = Partenaire::findOrFail($id);
        $partenaire->delete();

        return redirect('partenaire')->with('success', 'Partenaire supprimé avec succès.');
    }


    public function statut($id)
    {
        $partenaire = Partenaire::findOrFail($id);

        // Si le partenaire est déjà actif, on le désactive
        if ($partenaire->statut == true) {
            $partenaire->update(['statut' => false]);
            return back()->with('message', 'Partenaire désactivé avec succès!');
        } else {
            // Si le partenaire n'est pas actif, on l'active sans affecter les autres partenaires
            $partenaire->update(['statut' => true]);
            return back()->with('message', 'Partenaire activé avec succès!');
        }
    }

}
