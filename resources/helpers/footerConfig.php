<?php

use App\Models\Conctact;

    if (!function_exists('footer')) {
        function footer()
        {
            $contact = Conctact::where('statut',true)->first();
            return $contact;
        }
    }

    //$entete_standard  = EnteteStandard::findOrFail(1);


