<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP007Repository;
use App\Repositories\FileUploadRepository;
use App\Repositories\DemandeRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;


class DemandeP007Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP007Repository $repositoryP007, DemandeRepository $repository){
        $this->repositoryP007 = $repositoryP007;
        $this->repository = $repository;
    }

    public function store(Request $request, UserRepository $userRepository){

        $data =  $request->all();
        // $data["user_id"] = Auth::user()->uuid;
        // $data["pays_fournisseur"] = $request->pays_residence;
        // //$data["beneficiaire"] = $request->beneficiaire;
        // $data["identite"] = $request->identite;
        // $data["is_producteur"] = $request->is_producteur;
        // $data["is_distributeur"] = $request->is_distributeur;
        // $data["is_importateur"] = $request->is_importateur;
        // $data["appelation_commercial"] = $request->appellation_commerciale;
        // $data["destination_pays"] = $request->destination_produit;
        // $data["montant"] = $request->destination_produit;
        unset($data['make_payment']);
        unset($data['commune_id']);
        unset($data['telephone']);
        unset($data['adresse_beneficiaire']);
        // $user = $userRepository->getById(Auth::user()->uuid);
        // $user->telephone = $request->telephone;
        // $user->save();
        //  dd($request->telephone);
        //$userRepository->updateById(Auth::user()->uuid, array('telephone'=> $request->telephone));
        //dd($data);
        //$uploadFile = $this->repository->uploadFile($request->all());
        //dd($data );
        //$uploadFile = $this->fileUploadRepository->importer($request->all(), 2);
        //dd($uploadFile);

        $this->repositoryP007->create($data);
        session()->flash('status', 'Post successfully updated.');

        return redirect('/')->with('statusu', 'Demande bien enregistrée');
    }
}
