<?php

namespace App\Http\Controllers;
use App\Repositories\CommuneRepository;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public $repository;
    public function __construct(CommuneRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "communes" => $this->repository->all(),

        ];
        return view('backend.parametre.commune_list', $data);
    }
}
