 @extends('backend.layout.base')
    @section('title')
    <div class="pagetitle">
      <h1>Liste des Demandes du Permis d'écotourisme ou de tourisme écologique </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Demandes</a></li>
          <li class="breadcrumb-item active">Liste</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @endsection

    @section('content')
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">




            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Nouvelles  <span>| Demandes</span></h5>

                               <!-- Table with stripped rows -->
              <table class="table datatable table-stripped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Demandeur</th>
                    <th scope="col">Produit</th>
                    <th scope="col">Quantite/Kg</th>
                    <th scope="col">Date Demande</th>
                    {{-- <th scope="col">Commune</th> --}}
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($demandes as $demande)

                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td> {{ $demande->denomination_sociale_demandeur }}</td>
                        <td>{{ $demande->appelation_commercial}}</td>
                        <td>{{ $demande->quantite }}</td>
                        <td>{{ $demande->created_at }}</td>
                        <td>
                            <button title="Voir Détail" type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#largeModal"> <i class="bi bi-eye"></i> </button>
                            <button type="button" title="Valider" class="btn btn-success"><i class="bi bi-check-circle"></i></button>
                            <button type="button" title="Assigner à un collaborateur" class="btn btn-primary"><i class="bi bi-folder-symlink"></i></button>
                            <button type="button" title="Rejetter" class="btn btn-danger"><i class="bi bi-x-circle"></i></button>
                        </td>

                        <div class="modal fade" id="largeModal" tabindex="-1">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content" style="height: 500px;">
                                <div class="modal-header">
                                  <h5 class="modal-title">Détail de la Demande</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <div class="row">
                                        <div class="col-6">
                                            <b>Identite demandeur:</b>
                                            <span>OUEDRAOGO ISSOUF</span>
                                        </div>
                                        <div class="col-6">
                                            <b>Telephone :</b>
                                            <span>76 39 65 21</span>
                                        </div>
                                     </div><br>
                                     <div class="row">
                                        <div class="col-6">
                                            <b>Identite Fournisseur:</b>
                                            <span>OUEDRAOGO Isso</span>
                                        </div>
                                        <div class="col-6">
                                            <b>Telephone :</b>
                                            <span>76 39 65 21</span>
                                        </div>
                                     </div> <br>


                                        <h4>Liste des fichiers Soumis</h4>
                                       





                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div><!-- End Large Modal-->


                      </tr>
                    @endforeach


                </tbody>
              </table>
              <!-- End Table with stripped rows -->


                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>
    @endsection

  @section('script')

  @endsection


