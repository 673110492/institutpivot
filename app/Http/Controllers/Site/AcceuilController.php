<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Temoignage;
use App\Models\Formation;
use App\Models\TeteHome;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function index()
    {
        $tete = TeteHome::where('statut',true)->first();
        $video = Video::where('statut',true)->first();
        $formations = Formation::where('statut',true)->get();
        $temoignages = Temoignage::where('statut',true)->where('fonction','code')->get();
        foreach($temoignages as $item){
            if(isset($item->formation_id)){
                $item->formation = Formation::findOrFail($item->formation_id);
            }
        }
        $autres = Temoignage::where('statut',true)->where('fonction','!=','code')->get();
           return view('home',compact('temoignages','video','tete','autres','formations'));
    }
}
