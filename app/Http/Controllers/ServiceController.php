<?php

namespace App\Http\Controllers;
 
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $repository;
    public function __construct(ServiceRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "services" => $this->repository->all(),

        ];
        return view('backend.parametre.service_list', $data);
    }
}
