<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifP009 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];protected $primaryKey = 'uuid';

    public function Demande(){
        return $this->belongsTo(Demande::class, 'demande_p009_id', 'uuid');
    }
}
