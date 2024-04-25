<?php

use App\Models\Conctact;
use App\Models\Formation;

    if (!function_exists('footer')) {
        function footer()
        {
            $contact = Conctact::where('statut',true)->first();
            $formation = Formation::where('statut',true)->first();
            return$contact;
        }
    }
    if (!function_exists('formation')) {
        function formation()
        {
            $formations = Formation::where('statut',true)->get();
            // dd($formations);
            return $formations;
        }
    }

    //$entete_standard  = EnteteStandard::findOrFail(1);


