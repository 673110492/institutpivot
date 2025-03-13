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
        $formations = Formation::where('statut',true)->get();
        $autres = Temoignage::where('statut',true)->where('fonction','!=','code')->get();
        $about = Apropos::where('statut',true)->first();
        $video = Video::where('statut',true)->first();
        // dd($video);
        return view('front1.about',compact('about','video','autres','formations'));
    }
}
