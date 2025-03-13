<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Apropos;
use App\Models\Formation;
use App\Models\formation_types;
use App\Models\PreInscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preinscription = PreInscription::count();
        $formation = Formation::count();
        $type = formation_types::count();
        return view('admin.dashboard', compact('preinscription','formation','type'));
    }
}
