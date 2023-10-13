<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\DemandeP001;
use App\Models\DemandePieceP001;
use App\Repositories\DemandeP001Repository;
use App\Repositories\DemandePieceP001Repository;

class BackendController extends Controller
{



    public function index( DemandeP001Repository $demandeP001Repository, DemandePieceP001 $demandePieceP001, DemandeP001 $demandeTest){
        $data = [
             "demandes"=>$demandeTest::with('demandePiece')->get(),
            //  "demandes" => $demandeP001Repository->all(),
            "demandeDeposee" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
            "demandeTraite" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'traite')),
            "demandeRejetter" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'rejetter')),
            // "fichiers"=> DemandePieceP001::where
        ];
        return view('backend.home', $data);



    }




    public function listDemande( DemandeP001Repository $demandeP001Repository,  DemandeP001 $demandeTest){

        

          $data = [
              "demandes" => $demandeP001Repository->all(),
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
              "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
          ];
        //   dd($data['demandes'][0]->demandePiece);

          return view('backend.list_demande', $data);

      }








}
