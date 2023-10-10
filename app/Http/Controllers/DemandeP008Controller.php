<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP008Repository;

class DemandeP008Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP008Repository $repository){
        $this->repository = $repository;
    }
}
