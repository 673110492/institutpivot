<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use App\Models\Conctact;
use Illuminate\Http\Request;

class ContacterController extends Controller
{
    public function index()
    {
        $contact = Conctact::where('statut',true)->first();
        // dd($contact);
        return view('front.contact',compact('contact'));
    }
}
