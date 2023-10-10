<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandeP0011 extends DemandeP005
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];protected $primaryKey = 'uuid';
}
