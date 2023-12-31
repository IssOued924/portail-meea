<section id="about" class="about">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h5><strong>Délivrance d'avis technique d'importation de produits chimiques insdustriels </strong></h5>
                   <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif</p>
                    <p class="alert alert-danger">Les champs suivis d'étoile rouge sont obligatoires</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                                    <form id="msform" method="POST" action="{{route("demandesp001-store")}}" enctype="multipart/form-data" >
                                        @csrf

                                <!-- progressbar -->
                                <ul id="progressbar" >
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="personal"><strong>Identité du fournisseur</strong></li>
                                    <li id="caracteristik"><strong>Pièces jointes</strong></li>
                                    <li id="stockage"><strong>Information relative au stockage</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    <li id="confirm"><strong>Validation</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Identité du demandeur <span style="color:red">
                                            *</span></h4>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="nom_societe fw-bold" >Producteur</label>
                                                <input type="checkbox" value="1" class="checkbox"  name="is_producteur" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold ">Importateur</label>
                                                <input type="checkbox" value="1"  name="is_importateur"/>
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Distributeur</label>
                                                <input type="checkbox" value="1"  name="is_distributeur" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Utilisateur</label>
                                                <input type="checkbox" value="1"  name="is_utilisateur"/>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Dénomination Sociale</strong> <span
                                                        style="color: red">*</span></label>
                                                <input type="text"  class="border-success"  name="denomination_sociale_demandeur"
                                                    placeholder="Dénomination Sociale" required/>
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Lieu de résidence/siège<span style="color:red">
                                                        *</span></label>

                                                <select name="commune_id" required id="selectMultiple" class="form-select ">
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option class="border-success" value="">Veuillez choisir une ville</option>
                                                    @foreach ( $communes as  $com)
                                                     <option value="{{ $com->uuid }}" >{{ $com->libelle }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse Postale </label>
                                                <input type="text" class="border-success" name="adresse_postale_demandeur"
                                                    placeholder="Adresse ou numero de telephone"/>
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" class="border-success"   placeholder="Telephone" value="{{ $telephone}}" />
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-12">
                                                <label class="activite">Activités ménées<span
                                                        style="color: red">*</span></label>
                                                <textarea class="border-success" name="activite"
                                                    placeholder="Activités ménées"></textarea>
                                            </div>
                                        </div> --}}

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Quantité totale à importer<span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="quantite"
                                                placeholder="Adresse ou numero de telephone"  required/>
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                    *</span></label>
                                                    <input type="text" name="telephone" placeholder="Telephone" />
                                                </div> --}}
                                        </div><br>

                                        <div class="row">
                                            <label class="adresse fw-bold">Dangers de la substance<span style="color: red">*</span></label>
                                            <div class="col">
                                                <label class="nom_societe fw-bold">Corrosif</label>
                                                <input type="checkbox" class="border-success" value="1" name="is_corrosif"/>
                                            </div>
                                            <div class="col">
                                                <label class="siege_social fw-bold">Irritant</label>
                                                <input type="checkbox" value="1" name="is_iritant"/>
                                            </div>
                                            <div class="col">
                                                <label class="siege_social fw-bold">Toxique</label>
                                                <input type="checkbox" value="1"  name="is_toxic"/>
                                            </div>
                                            <div class="col">
                                                <label class="siege_social fw-bold">Inflammable</label>
                                                <input type="checkbox" value="1"  name="is_inflammable"/>
                                            </div>
                                            <div class="col">
                                                <label class="siege_social fw-bold">Environnemental</label>
                                                <input type="checkbox" value="1" name="is_danger_env"/>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Autre à préciser</label>
                                                <input type="text" class="border-success" name="autre_danger"
                                                    placeholder="Autre à préciser " />
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button btn btn-success"
                                        value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Identité du fournisseur</h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Dénomination Sociale<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="denomination_sociale_fournisseur"
                                                    placeholder="Dénomination Sociale" required />
                                            </div><br>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Pays de résidence<span style="color:red">
                                                        *</span></label>
                                                <input type="text" class="border-success" name="pays_fournisseur" placeholder="Pays de résidence" required />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse<span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="adresse_fournisseur"
                                                    placeholder="Adresse ou numero de telephone" required/>
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div>

                                    </div>
                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"   class="next action-button"
                                        value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Pièces à fournir</h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe  fw-bold">Une copie de l’avis de faisabilité <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="form-control border-success" name="avis_faisabilite"
                                                      />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Une copie de RCCM<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="rccm"  class="form-control border-success" />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Une facture pro-forma datant de moins de six (06) mois<span style="color:red">
                                                    *</span> </label>
                                                <input type="file" class="border-success form-control" name="facture_pro_format"
                                                     />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Une fiche de données de sécurité ou fiche technique de chaque produit<span style="color:red">
                                                    *</span></label>
                                                <input type="file" name="fiche_securite" class="border-success form-control"  />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Un registre de traçabilité des produits ou substances chimiques <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="registre_tracabilite"
                                                      />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Un registre des déchets issus de leur utilisation <span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="registre_dechet" class="form-control border-success" />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Une attestation de destination finale pour le cas spécifique du cyanure <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="attestation_destination_finale" />
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Liste des produits <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="list_produit" />
                                            </div>

                                        </div><br>



                                    </div>
                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"   class="next action-button"
                                        value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Informations relatives au transport et au stockage</h2>

                                        <div class="row">
                                            <label for="">
                                                Lieu d’implantation des locaux de stockage
                                                <span style="color:red">*</span>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="nom_societe fw-bold">Zone d’habitation</label>
                                                <input type="radio" class="border-success" name="type_local_stockage" value="Zone d’habitation"/>
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone industrielle</label>
                                                <input type="radio" name="type_local_stockage" value="Zone industrielle"/>
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone commerciale</label>
                                                <input type="radio" name="type_local_stockage" value="Zone commerciale"/>
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone d’activités diverses</label>
                                                <input type="radio" name="type_local_stockage" value="Zone d’activités diverses"/>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Autre à préciser</label>
                                                <input type="text" class="border-success" name="type_local_stockage_autre"
                                                    placeholder="Autre à préciser " />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Capacité Totale des locaux de stockage <span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="capacite_stockage"
                                                    placeholder="Capacité Totale des locaux de stockage" />
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div><br>

                                        {{-- <div class="row " >
                                            <div class="col text-center">
                                              <label for="#">Système de transport <span style="color:red">
                                                *</span></label>
                                            </div>

                                            <div class="col text-center">
                                                <label for="#" >Agrément<span style="color:red">
                                                    *</span></label>
                                            </div>
                                        </div> --}}
                                        <div class="row col">
                                            <div class="col-6">
                                                <label>Choisir le système de transport</label>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="nom_societe fw-bold">Régime direct</label>
                                                        <input type="radio"  name="systeme_transport" value="Régime direct"/>
                                                    </div>
                                                    <div class="col">
                                                        <label class="siege_social fw-bold">Sous-traité</label>
                                                        <input type="radio" name="systeme_transport" value="Sous-traité"/>
                                                    </div>
                                               </div>
                                           </div>


                                           <div class="col-6">
                                                <label>Choisir agrèment</label>
                                                <div class="row">
                                                <div class="col-3">
                                                    <label class="siege_social fw-bold">Agréé</label>
                                                    <input type="radio" name="agrement_transport" value="Agrée"/>
                                                </div>
                                                <div class="col-3">
                                                    <label class="siege_social fw-bold">Non agréé</label>
                                                    <input type="radio" name="agrement_transport" value="Non agrée"/>
                                                </div>
                                            </div>
                                            </div>
                                        </div>



                                    </div>
                                    <input type="button" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"   class="next action-button"
                                        value="Suivant" />
                                </fieldset>
                                <fieldset>

                                    <div class="form-card">
                                        <h2 class="fs-title">   </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="is_certified"
                                                class="required-checkbox   checkbox" value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="submit"  class="next action-button"
                                        value="Valider" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Validation !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>Votre demnde est enregistré avec succes et en cour de traitement!
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" ;></script>

<script type="text/javascript">
    $('#selectMultiple').select2();
</script>

<script type='text/javascript'>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function () {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Vérifiez si tous les champs obligatoires dans le formulaire actuel sont remplis
        var isValid = true;
        current_fs.find('input[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });

        // Vérifiez si la case de confirmation est cochée
        current_fs.find('checkbox[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).is(":checked")) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });

        if (isValid) {
            // Ajoutez la classe Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            // Affichez le champ suivant
            next_fs.show();
            // Masquez le champ actuel avec un style
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    // pour faire apparaître l'animation du champ
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 600
            });
        }
    });


$(".previous").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
        },
        duration: 600
    });
});

$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
});

$(".submit").click(function(){
    return false;
})

});
</script>
<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
  });

</script>
