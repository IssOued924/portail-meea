<?php

namespace App\Http\Controllers;

use App\Repositories\UsagerRepository;
use Illuminate\Http\Request;

class UsagerController extends Controller
{
    public $repository;
    public function __construct(UsagerRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "usagers" => $this->repository->all(),

        ];
        return view('backend.utilisateur.usager_list', $data);
    }
}
