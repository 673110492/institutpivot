<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Temoignage;
use App\Models\Formation;
use App\Models\TeteHome;
use App\Models\Apropos;
use App\Models\TypeFormation;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    public function index()
    {
        $video = Video::where('statut',true)->first();
        $formations = Formation::where('statut',true)->get();
        $types = TypeFormation::where('statut',true)->get();
        $autres = Temoignage::where('statut',true)->where('fonction','!=','code')->get();
        $about = Apropos::where('statut',true)->first();
        $temoignages = Temoignage::where('statut',true)->where('fonction','code')->get();
        foreach($temoignages as $item){
            if(isset($item->formation_id)){
                $item->formation = Formation::findOrFail($item->formation_id);
            }
        }
           return view('front.index',compact('about','temoignages','video','autres','formations','types'));
    }
}
