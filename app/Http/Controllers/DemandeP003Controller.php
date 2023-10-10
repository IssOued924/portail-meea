<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP003Repository;
class DemandeP003Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP003Repository $repository){
        $this->repository = $repository;
    }
}
