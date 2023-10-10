<?php

namespace App\Http\Controllers;
use App\Repositories\PieceJointeRepository;

use Illuminate\Http\Request;

class PieceJointeController extends Controller
{
    public $repository;
    public function __construct(PieceJointeRepository $repository){
        $this->repository = $repository;
    }

    
}
