<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\DemandeP001;
use App\Models\DemandePieceP001;
use Illuminate\Http\Request;
use App\Repositories\DemandeP001Repository;
use App\Repositories\DemandePieceP001Repository;
use App\Repositories\UserRepository;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;

class DemandeP001Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP001Repository $repository){
        $this->repository = $repository;
    }


    public function index(){
         return view('create');

    }

    public function create(){

        // $data["commune"] = Commune::all();
        // dd($data["commune"]);
        return view('livewire.Demandes.create');
    }

    public function store(Request $request, UserRepository $userRepository, DemandePieceP001Repository $demandePieceP001Repository, DemandeP001 $demande ){

         $data =  $request->all();
         $dataFiles = $request->all();
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

            unset($data['telephone']);



        $user = $userRepository->getById(Auth::user()->uuid);
         $user->telephone = $request->telephone;
         $user->save();
        //  dd($request->telephone);
         $userRepository->updateById(Auth::user()->uuid, array('telephone'=> $request->telephone));

        // $this->repository->create($data);

       $cheminFaisabilite =  $this->repository->uploadFile($dataFiles, 'avis_faisabilite');
       $cheminRccm =  $this->repository->uploadFile($dataFiles, 'rccm');
       $facture_pro_format =  $this->repository->uploadFile($dataFiles, 'facture_pro_format');
       $cheminFicheSecurite =  $this->repository->uploadFile($dataFiles, 'fiche_securite');
       $registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'registre_tracabilite');
       $registre_dechet =  $this->repository->uploadFile($dataFiles, 'registre_dechet');
       $attestation_destination_finale =  $this->repository->uploadFile($dataFiles, 'attestation_destination_finale');
       $list_produit =  $this->repository->uploadFile($dataFiles, 'list_produit');
    //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
       unset($data['avis_faisabilite']);
       unset($data['rccm']);
       unset($data['facture_pro_format']);
       unset($data['fiche_securite']);
       unset($data['registre_tracabilite']);
       unset($data['registre_dechet']);
       unset($data['attestation_destination_finale']);
       unset($data['list_produit']);

       $demande = $this->repository->create($data);
       $demande->save();
    //    dd($demande->uuid);



    //    $this->repository->uuid();
       $demandePieceP001Repository->setChemin ($cheminFaisabilite, $demande->uuid);
       $demandePieceP001Repository->setChemin ($cheminRccm, $demande->uuid);
       $demandePieceP001Repository->setChemin ($facture_pro_format, $demande->uuid);
       $demandePieceP001Repository->setChemin ($cheminFicheSecurite, $demande->uuid);
       $demandePieceP001Repository->setChemin ($registre_tracabilite, $demande->uuid);
       $demandePieceP001Repository->setChemin ($registre_dechet, $demande->uuid);
       $demandePieceP001Repository->setChemin ($attestation_destination_finale, $demande->uuid);
       $demandePieceP001Repository->setChemin ($list_produit, $demande->uuid);



        return redirect('/')->with('status', 'Votre Demande à bien été Soumis !!');
    }


}
