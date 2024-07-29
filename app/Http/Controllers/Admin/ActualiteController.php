<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Blog;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actualites = Blog::all();
        return view('admin.blog.index',compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'photo' => 'required',
            'message' => 'required'
        ]);
        $requestData = $request->except('token');
        $requestData['statut'] = 0 ;
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $atualite = Blog::create($requestData);
        return to_route('blog.index')->with('message', ' Actualité ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $actualite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $actualite = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'titre' => 'required',
            'message' => 'required'
        ]);
        $actualite = Blog::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $actualite->update($requestData);

        return to_route('blog.index')->with('message', 'Actualité Modifiée avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $actualite = Blog::findOrFail($id);
        $actualite->delete();
        return back()->with('message', 'Suppression effectuée avec succes');
    
    }
    public function statut($id)
    {
        $actualite = Blog::findOrFail($id);
        if($actualite->statut == true){
            $actualite->update(['statut' => false]);
            return back()->with('message', 'Actualité désactivée avec succes!');
        }else{
            $actualite->update(['statut' => true]);
            return back()->with('message', 'Actualité activée avec succes!');
        }
    }
}
