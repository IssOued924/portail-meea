<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP0011Repository;

class DemandeP0011Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP0011Repository $repository){
        $this->repository = $repository;
    }
}
