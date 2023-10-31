<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Formation;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index()
    {
        $formations = Formation::where('statut',true)->get();
           return view('formation',compact('formations'));
    }
    public function show($id)
    {
       $formation = Formation::findOrFail($id);
       $formations = Formation::where('statut',true)->get();
       return view('formation_detail',compact('formation','formations'));
    }
}
