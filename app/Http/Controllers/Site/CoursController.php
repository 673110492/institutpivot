<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use App\Models\Video;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index()
    {
        $video = Video::where('statut',true)->first();
        $formations = Formation::where('statut',true)->get();
           return view('front/formation',compact('formations','video'));
    }
    public function show($id)
    {
       $formation = Formation::findOrFail($id);
       $formations = Formation::where('statut',true)->where('id', '!=' ,$id)->get();
       return view('front/formation_detail',compact('formation','formations'));
    }
}
