<?php

use App\Models\Conctact;
use App\Models\Formation;
use App\Models\TypeFormation;

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
            return $formations;
        }
    }
    if (!function_exists('type')) {
        function type()
        {
            $types = TypeFormation::where('statut',true)->get();
            return $types;
        }
    }

    //$entete_standard  = EnteteStandard::findOrFail(1);


