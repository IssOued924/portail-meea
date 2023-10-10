<?php

namespace App\Http\Controllers;
use App\Repositories\StructureRepository;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public $repository;
    public function __construct(StructureRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "structures" => $this->repository->all(),

        ];
        return view('backend.parametre.structure_list', $data);
    }
}
