<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Apropos;
use App\Models\Video;
use App\Models\Temoignage;
use App\Models\Formation;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = Apropos::where('statut',true)->first();
        $video = Video::where('statut',true)->first();
        $temoignages = Temoignage::where('statut',true)->where('fonction','code')->get();
        foreach($temoignages as $item){
            if(isset($item->formation_id)){
                $item->formation = Formation::findOrFail($item->formation_id);
            }
        }
        // dd($video);
        return view('about',compact('about','video','temoignages'));
    }
}
