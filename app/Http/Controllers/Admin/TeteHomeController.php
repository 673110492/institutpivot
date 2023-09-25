<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\TeteHome;
use Illuminate\Http\Request;

class TeteHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $tetes = TeteHome::all();
           return view('admin.acceuil.tete.index',compact('tetes'));
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
            'titre' => 'required|string',
            'photo' => 'required'
        ]);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $tete = TeteHome::create($requestData);
        return to_route('tete.index')->with('message', 'En tete ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeteHome $teteHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeteHome $teteHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $tete = TeteHome::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $tete->update($requestData);

        return back()->with('message', 'En tete modifiée avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tete = TeteHome::findOrFail($id);
        $tete->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }
    public function statut($id)
    {
        $tete = TeteHome::findOrFail($id);
        if($tete->statut == true){
            $tete->update(['statut' => false]);
            return back()->with('message', 'En tete désactivé avec succes!');
        }else{
            $tete1 = TeteHome::where('statut',true)->get();
            if($tete1->count() != 0){
                foreach($tete1 as $item){
                    $item->update(['statut' => false]);
                }
            }
            $tete->update(['statut' => true]);
            return back()->with('message', 'En tete activé avec succes!');
        }
    }
}
