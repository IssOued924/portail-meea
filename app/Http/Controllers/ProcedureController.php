<?php

namespace App\Http\Controllers;
use App\Repositories\ProcedureRepository;

use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    public $repository;
    public function __construct(ProcedureRepository $repository){
        $this->repository = $repository;
    }


    public function index(){

        $data =  [
            "procedures" => $this->repository->all(),

        ];
        return view('backend.parametre.procedure_list', $data);
    }

}
