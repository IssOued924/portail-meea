<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Repositories\DemandeP001Repository;

class BackendController extends Controller
{



    public function index( DemandeP001Repository $demandeP001Repository){
        $data = [
            "demandes" => $demandeP001Repository->all(),
            "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
            "demandeTraite" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'traite')),
            "demandeRejetter" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'rejetter')),
        ];
        return view('backend.home', $data);

    }




    public function listDemande( DemandeP001Repository $demandeP001Repository){


          $data = [
              "demandes" => $demandeP001Repository->all(),
              "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
          ];

          return view('backend.list_demande', $data);

      }








}
