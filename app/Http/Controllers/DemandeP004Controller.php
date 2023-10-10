<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP004Repository;
class DemandeP004Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP004Repository $repository){
        $this->repository = $repository;
    }
}
