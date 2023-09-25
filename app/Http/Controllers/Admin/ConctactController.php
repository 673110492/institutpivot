<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Conctact;
use Illuminate\Http\Request;

class ConctactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Conctact::all();
        return view('admin.contact.index',compact('contacts'));
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
            'adresse' => 'required|string',
            'photo' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'site' => 'required'
        ]);
        $requestData = $request->except('token');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        // dd($requestData);
        $conctact = Conctact::create($requestData);
        return to_route('contact.index')->with('message', 'Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Conctact $conctact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conctact $conctact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $contact = Conctact::findOrFail($id);
        $requestData = $request->all();
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $contact->update($requestData);

        return back()->with('message', 'Modifié avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Conctact::findOrFail($id);
        $contact->delete();
        return back()->with('message', 'Suppression effectuée avec succes');
    }
    public function statut($id)
    {
        $contact = Conctact::findOrFail($id);
        if($contact->statut == true){
            $contact->update(['statut' => false]);
            return back()->with('message', 'Désactivé avec succes!');
        }else{
            $contact1 = Conctact::where('statut',true)->get();
            if($contact1->count() != 0){
                foreach($contact1 as $item){
                    $item->update(['statut' => false]);
                }
            }
            $contact->update(['statut' => true]);
            return back()->with('message', 'Activé avec succes!');
        }
    }
}
