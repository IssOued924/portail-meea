<?php

namespace App\Http\Controllers;
use App\Repositories\BaseJuridiqueRepository;
use Illuminate\Http\Request;

class BaseJuridiquesController extends Controller
{
    public $repository;
    public function __construct(BaseJuridiqueRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "basejuridiques" => $this->repository->all(),

        ];
        return view('backend.parametre.basejuridique_list', $data);
    }
}
