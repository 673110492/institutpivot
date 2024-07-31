<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Formation;
use App\Models\formation_types;
use App\Models\TypeFormation;
use App\Models\User;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();
        foreach($formations as $item){

            $types=formation_types::where('formation_id',$item->id)->get();
            // dd($types);
            foreach($types as $it){
                $type=typeFormation::findOrFail($it->type_formation_id);
                $it->nom = $type->nom;
            }
            $item->types=$types;

        }
        return view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Form::all();
        foreach($types as $item){
            $item->delete();
        }
        $type_formations = TypeFormation::all();
        return view('admin.formations.create', compact('type_formations'));
    }
    public function createtype($id)
    {
        $formation = Formation::findOrFail($id);
        $type_formations = TypeFormation::all();
        return view('admin.formations.ajouttype', compact('formation','type_formations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:255',
        ]);
        $type = Form::all();
        $requestData = $request->except('token','type_formation_id','duree','prix');
        if ($request->hasFile('photo')) {
            $requestData['photo'] = $request->file('photo')
            ->store('uploads', 'public');
        }
        $formation = Formation::create($requestData);
        foreach($type as $item){
            $data['formation_id'] = $formation->id;
            $data['type_formation_id'] = $item->type_id;
            $data['duree'] = $item->duree;
            $data['prix'] = $item->prix;
            formation_types::create($data);
        }
        return to_route('formation.index')->with('message', 'Formation ajoutée avec succès');
    }
    public function storetype(Request $request)
    {
        $request->validate([
            'duree' => 'required',
            'prix' => 'required',
            'formation_id' => 'required',
            'type_formation_id' => 'required'
        ]);
        $requestData = $request->except('token');
        formation_types::create($requestData);
        return to_route('formation.index')->with('message', ' ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $formation = Formation::findOrFail($id);

        $types=formation_types::where('formation_id',$formation->id)->get();
            foreach($types as $it){
                $type=typeFormation::findOrFail($it->type_formation_id);
                $it->nom = $type->nom;
            }
            $formation->types = $types;
        return view('admin.formations.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        $type_formations = TypeFormation::all();
        return view('admin.formations.edit', compact('type_formations','formation'));
    }
    public function edittype($id)
    {
        $type = formation_types::findOrFail($id);
        $type->formation = Formation::findOrFail($type->formation_id);
        $type->type = TypeFormation::findOrFail($type->type_formation_id);
        $type_formations = TypeFormation::all();
        return view('admin.formations.edittype', compact('type_formations','type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatetype(Request $request,$id)
    {
        // dd($request);
        $request->validate([
            'prix' => 'required',
            'duree'  => 'required'
        ]);
        $type = formation_types::findOrFail($id);
        $requestData = $request->except('token');
        $type->update($requestData);
        return to_route('formation.index')->with('message', 'Modalités modifiées avec succès');
    }
    public function update(Request $request,$id)
    {
        // dd($request);
        $request->validate([
            'nom' => 'required|string|max:255',
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
        $types = formation_types::where("formation_id",$formation->id)->get();
        foreach($types as $item){
            $item->delete();
        }
        $formation->delete();
        return back()->with('message', 'Suppressions effectuée avec succes');
    }
    public function destroytype($id)
    {
        $type = formation_types::findOrFail($id);
        $type->delete();
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
    public function search_type($id)
    {
        $type = TypeFormation::findOrFail($id);
        $res=[$type->duree];

         return response()->json($res);
    }
    public function ajout_type($type,$duree,$prix)
    {
        $data['type_id'] = $type;
        $data['duree'] = $duree; 
        $data['prix'] = $prix;
        $form = Form::create($data);
        $tous = Form::all();

        foreach($tous as $item){
            $tout = TypeFormation::findOrFail($item->type_id);
            $item->nom = $tout->nom;
        }

        return response()->json($tous);
    }
    public function supp_type($id)
    {
        $iv = Form::findOrFail($id);
        $iv->delete();
        $tous = Form::all();

        foreach($tous as $item){
            $tout = TypeFormation::findOrFail($item->type_id);
            $item->nom = $tout->nom;
        }

        return response()->json($tous);
    }
}
