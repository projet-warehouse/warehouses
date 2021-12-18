

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
        <div class="mb-3">
            <h4 class="mb-3 mb-md-0">Ajouter un nouveau controlleur</h4>
          </div>
        <div class="card p-4">
            <form method="POST">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom">
                  </div>
                  <div class="form-group col-md-6">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact" id="contact">
                  </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label >Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email">
                    </div>
                    <div class="form-group col-md-6">
                        <label >Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="" name="password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Fonction</label>
                        <select id="fonction" name="fonction" class="form-control">
                          <option selected>Administrateur</option>
                          <option>Gestionnaire de commande</option>
                          <option>Analyste</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5 mx-auto">
                        <label>Photo de profil</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                      </div>
                  </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </form>
        </div>

	@include('admin/partials/footer')
@endsection
