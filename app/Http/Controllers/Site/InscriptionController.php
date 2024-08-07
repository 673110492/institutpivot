<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\PreInscription;
use App\Models\TypeFormation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InscriptionController extends Controller
{
        public function index(){
        $type_formations = TypeFormation::all();
        $formations = Formation::all();
        return view('front.preinscription',compact('type_formations','formations'));

    }
    public function search_formation($id)
    {
        $results =   DB::table('formations')
            ->join('formation_types', 'formations.id', '=', 'formation_types.formation_id')
            ->join('type_formations', 'type_formations.id', '=', 'formation_types.type_formation_id')
            ->where('formation_types.type_formation_id', '=', $id)
            ->select('formations.*')
            ->get();
            return response()->json($results);
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'type_formation_id' => 'required',
            'formation_id' => 'required',
        ]);
        $data = $request->all();
        PreInscription::create($data);
        return to_route('preinscription.index')->with('message', 'Preinscription ajoutée avec succès');
    }
}
