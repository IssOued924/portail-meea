<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP009Repository;

class DemandeP009Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP009Repository $repository){
        $this->repository = $repository;
    }
}
