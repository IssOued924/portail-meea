<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP009Controller extends Controller
{
    public $repository;
    public function __construct(TarifP009Repository $repository){
        $this->repository = $repository;
    }
}
