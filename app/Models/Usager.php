<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];

    public function communeResidence(){
        return $this->belongsTo(Commune::class, 'commune_residence', 'uuid');
    }

    public function typeUsager(){
        return $this->belongsTo(TypeUsager::class, 'type_usager_id', 'uuid');
    }

    public function typeIdentite(){
        return $this->belongsTo(TypeIdentite::class, 'type_identite_id', 'uuid');
    }

    public function communeOrigine(){
        return $this->belongsTo(Commune::class, 'commune_origine', 'uuid');
    }

}
