<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Actualite::where('statut',true)->get();
           return view('blog',compact('blog'));
    }
    public function show($id)
    {
       $blog = Actualite::findOrFail($id);
    //    $formations = Formation::where('statut',true)->get();
       return view('blog_detail',compact('blog'));
    }
}
