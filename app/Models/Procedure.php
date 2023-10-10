<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];protected $primaryKey = 'uuid';

    public function baseJuridique(){
        return $this->belongsToMany(BaseJuridique::class, 'procedure_base_juridiques','base_juridique_id', 'uuid');
    }
}
