<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreInscription extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function formation_type()
    {
        return $this->belongsTo(TypeFormation::class);
    }
}
