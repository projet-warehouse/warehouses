

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
        <div class="mb-3">
            <h4 class="mb-3 mb-md-0">Gestionnaire des commandes</h4>
          </div>
          <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0"></h6>
                  {{-- <div class="dropdown mb-2">
                    <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
                    </div>
                  </div> --}}
                </div>
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th class="pt-0">#</th>
                        <th class="pt-0">Commande N°</th>
                        <th class="pt-0">Date de la commande</th>
                        <th class="pt-0">Produits</th>
                        <th class="pt-0">Etat de la commande</th>
                        <th class="pt-0">Client</th>
                        <th class="pt-0">Lieu de livraison</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>001</td>
                        <td>01/01/2021</td>
                        <td>Téléviseur</td>
                        <td>
                          <div class="form-group">
                            <select id="etatcommande" name="etatcommande" class="form-control ">
                              <option selected>Commande effectuée</option>
                              <option>En préparation</option>
                              <option>Prête pour Livraison</option>
                              <option>En cours de Livraison</option>
                              <option>Livrée</option>
                            </select>
                          </div>
                        </td>
                        <td>Atchin Parfait</td>
                        <td>Abobo N'dotré</td>
                      </tr>

                      <tr>
                        <td>2</td>
                        <td>002</td>
                        <td>10/12/2021</td>
                        <td>Home Cinema</td>
                        <td>
                          <div class="form-group">
                            <select id="etatcommande" name="etatcommande" class="form-control">
                              <option>Commande effectuée</option>
                              <option>En préparation</option>
                              <option selected>Prête pour Livraison</option>
                              <option>En cours de Livraison</option>
                              <option>Livrée</option>
                            </select>
                          </div>
                        </td>
                        <td>Adiko Rodrigue</td>
                        <td>Yopougon</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div> 
            </div>
          </div>
  </div>
	@include('admin/partials/footer')
@endsection
