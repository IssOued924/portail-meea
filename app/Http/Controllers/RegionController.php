<?php

namespace App\Http\Controllers;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public $repository;
    public function __construct(RegionRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data = [
            "regions" => $this->repository->all(),
            // "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
        ];
        return view('backend.parametre.region_list', $data);
    }
}
