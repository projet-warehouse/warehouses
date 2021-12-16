

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
        <div class="mb-3">
            <h4 class="mb-3 mb-md-0">Ajouter une nouvelle catégorie</h4>
          </div>
        <div class="card p-4">
          <form>
            <div class="form-group">
              <label >Nom de la catégories</label>
              <input type="text" class="form-control" id="nomcategorie" name="nomcategorie">
            </div>
            <div class="form-group">
              <label>Surnom de la catégories</label>
              <input type="text" class="form-control" id="surnomcategorie" name="surnomcategorie">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div>
          
	@include('admin/partials/footer')
@endsection
