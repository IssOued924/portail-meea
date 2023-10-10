<?php

namespace App\Http\Controllers;
use App\Repositories\TypeUsagerRepository;

use Illuminate\Http\Request;

class TypeUsagerController extends Controller
{
    public $repository;
    public function __construct(TypeUsagerRepository $repository){
        $this->repository = $repository;
    }
}
