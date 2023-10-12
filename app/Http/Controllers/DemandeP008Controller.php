<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\DemandeP008;
use App\Repositories\UserRepository;
use App\Repositories\UsagerRepository;
use App\Repositories\DemandeP008Repository;
use App\Repositories\DemandePieceP008Repository;

class DemandeP008Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP008Repository $repository){
        $this->repository = $repository;
    }


    public function index(){
         return view('create');

    }

    public function create(){
        return view('livewire.Demandesp008.createDechets');
    }

    public function store(Request $request, UserRepository $userRepository, UsagerRepository $usagerRepository, DemandePieceP008Repository $demandePieceP008Repository, DemandeP008 $demande ){
        $data =  $request->all();
        $dataFiles = $request->all();

        /* DEBUT Mise-à-jour des infos pro de la société demandeuse */
        $user = $userRepository->getById(Auth::user()->uuid);
        $usager = $usagerRepository->getById($user->usager_id);
        $usagerRepository->updateById($usager->uuid, array(
            'nom_entreprise'=> $request->beneficiaire,
            'siege_social'=> $request->siege_social,
            'boite_postale'=> $request->boite_postale,
            'adresse_bf'=> $request->adresse_beneficiaire,
        ));
        /* FIN Mise-à-jour des infos pro de la société demandeuse */

        /* DEBUT enregistrement des pièce-jointes avec récupération de leur urls */
        $chemin_rccm =  $this->repository->uploadFile($dataFiles, 'doc_rccm');
        $chemin_faisabilite =  $this->repository->uploadFile($dataFiles, 'doc_arrete_faisabilite');
        $chemin_avis_mairie =  $this->repository->uploadFile($dataFiles, 'doc_avis_mairie');
        $chemin_desc_technique =  $this->repository->uploadFile($dataFiles, 'doc_desc_technique');
        $chemin_registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'doc_registre_tracabilite');
        /* FIN enregistrement des pièce-jointes avec récupération de leur urls */
<<<<<<< HEAD
    
=======

>>>>>>> b1
        /* Debut détatchement des variables n'apparaissant pas directement dans la table DemandeP008 */
        unset($data['activite']);
        unset($data['siege_social']);
        unset($data['boite_postale']);
        unset($data['doc_rccm']);
        unset($data['doc_arrete_faisabilite']);
        unset($data['doc_avis_mairie']);
        unset($data['doc_desc_technique']);
        unset($data['doc_registre_tracabilite']);
        /* Debut détatchement des variables n'apparaissant pas directement dans la table DemandeP008 */

        $demande = $this->repository->create($data);
        $demande->usager_id = $user->usager_id;
        $demande->save();
<<<<<<< HEAD
        
=======

>>>>>>> b1
        /* DEBUT Mise-à-jour des pièce-jointes de sorte à retrouver la demande associée */
        $demandePieceP008Repository->setChemin ($chemin_rccm, $demande->uuid);
        $demandePieceP008Repository->setChemin ($chemin_faisabilite, $demande->uuid);
        $demandePieceP008Repository->setChemin ($chemin_avis_mairie, $demande->uuid);
        $demandePieceP008Repository->setChemin ($chemin_desc_technique, $demande->uuid);
        $demandePieceP008Repository->setChemin ($chemin_registre_tracabilite, $demande->uuid);
        /* FIN Mise-à-jour des pièce-jointes de sorte à retrouver la demande associée */

<<<<<<< HEAD
        return redirect('/')->with('status', 'Votre Demande à bien été Soumis !!');
=======
        return redirect('/')->with('status', 'Votre Demande à bien été Soumise !!');
>>>>>>> b1
    }
}
