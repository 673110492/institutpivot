<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\formation_types;
use App\Models\TypeFormation;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\Command\WhereamiCommand;

class CoursController extends Controller
{
    public function index()
    {
        $video = Video::where('statut',true)->first();
        $formations = Formation::where('statut',true)->get();
        $types = TypeFormation::where('statut',true)->get();
        return view('front/formation',compact('formations','video','types'));
    }
    public function categorie()
    {
        $types = TypeFormation::where('statut',true)->get();
        return view('front/categories',compact('types'));
    }
    public function show($id)
    {
       $formation = Formation::findOrFail($id);
       $types=formation_types::where('formation_id',$formation->id)->get();
            foreach($types as $it){
                $type=typeFormation::findOrFail($it->type_formation_id);
                $it->nom = $type->nom;
            }
            $formation->types = $types;
       $formations = Formation::where('statut',true)->where('id', '!=' ,$id)->get();
       return view('front/formation_detail',compact('formation','formations'));
    }
    public function search_cours($id)
    {
        if($id == 0){
            
            $formations = Formation::where('statut',true)->get();
            return response()->json($formations);
        }
        else{
            $results =  DB::table('formations')
            ->join('formation_types', 'formations.id', '=', 'formation_types.formation_id')
            ->join('type_formations', 'type_formations.id', '=', 'formation_types.type_formation_id')
            ->where('formation_types.type_formation_id', '=', $id)
            ->select('formations.*', 'formation_types.duree', 'formation_types.prix')
            ->get();
            return response()->json($results);
         }
    }

}