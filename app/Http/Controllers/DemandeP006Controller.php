<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP006Repository;
class DemandeP006Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP006Repository $repository){
        $this->repository = $repository;
    }
}
