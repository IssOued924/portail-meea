<?php

namespace Database\Seeders;

use App\Models\Procedure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Procedure::create([
            "libelle_court" => "AGDS",
            "libelle_long" =>"Autorisation de gestion des déchets Solide",
            "description" => "A propos de ce service La Demande d'autorisation de gestion des dechets est une autorisation officielle officiel qui certifie le lieu de résidence d'une personne au moment de la demande. Le dossier est traité par les autorités de l'Administration Locale au niveau du Secteur.",
            "img" => "img/dechet.png",
            "code" => "P008"
        ]);
        Procedure::create([
            "libelle_court" => "DATIPC",
            "libelle_long" =>"Délivrance d'avis technique d'importation de produits chimiques ",
            "description" => "Description de produit chimique",
            "img" => "img/chim.png",
            "code" => "P001"
        ]);
        Procedure::create([
            "libelle_court" => "CEESPNB",
            "libelle_long" =>"Certificat d'exemption des emballages et sachets plastiques non biodégradables",
            "description" => "Description des exemptions",
            "img" => "img/degra.png",
            "code" => "P006"
        ]);
        Procedure::create([
            "libelle_court" => "CHESPB",
            "libelle_long" =>"Certificat d'Homologation des emballages et sachets plastiques biodégradables",
            "description" => "Description des homologations",
            "img" => "img/9.png",
            "code" => "P007"
        ]);
        Procedure::create([
            "libelle_court" => "OATEA",
            "libelle_long" =>"Octroit d'agrément technique eau et assainissement",
            "description" => "Description des agrements eau et assainissement",
            "img" => "img/fg.png",
            "code" => "P002"
        ]);
        Procedure::create([
            "libelle_court" => "PETE",
            "libelle_long" =>"Permis d'écotourisme ou de tourisme écologique",
            "description" => "Description pour ecotourisme",
            "img" => "img/3.png",
            "code" => "P0012"
        ]);
        Procedure::create([
            "libelle_court" => "CDAS",
            "libelle_long" =>"Certificat de détention d'un animal sauvage",
            "description" => "Description pour la detention",
            "img" => "img/dff.png",
            "code" => "P004"
        ]);
        Procedure::create([
            "libelle_court" => "ADDMC",
            "libelle_long" =>"Autorisation donnant droit à mener la chasse",
            "description" => "Description de la chasse",
            "img" => "img/gfd.png",
            "code" => "P003"
        ]);
        Procedure::create([
            "libelle_court" => "PCBCB",
            "libelle_long" =>"Permis de circulation du bois et charbon de bois",
            "description" => "Description de la circulation du bois",
            "img" => "img/60.png",
            "code" => "P005"
        ]);
        Procedure::create([
            "libelle_court" => "PCBCB",
            "libelle_long" =>"Permis de coupe du bois et charbon de bois",
            "description" => "Description de la coupe du bois",
            "img" => "img/10.png",
            "code" => "P0011"
        ]);
    }
}
