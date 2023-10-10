<?php

namespace App\Http\Controllers;
use App\Repositories\ProvinceRepository;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public $repository;
    public function __construct(ProvinceRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "provinces" => $this->repository->all(),

        ];
        return view('backend.parametre.province_list', $data);
    }
}
