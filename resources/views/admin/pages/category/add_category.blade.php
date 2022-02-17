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
      <form method='POST' action='{{ route('store.category') }}'>
        @csrf
        <div class="form-group">
          <label>Nom de la catégorie</label>
          <input type="text" class="form-control" id="nomcategorie" name="name">
        </div>
        {{-- <div class="form-group">
              <label>Surnom de la catégories</label>
              <input type="text" class="form-control" id="surnomcategorie" name="surnomcategorie">
            </div> --}}
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href=" {{ route('category') }} " class="btn btn-primary">Annuler</a>
      </form>
      
    </div>
    {{-- <!-- <div>
      <div class="mt-3 bg-primary p-3 text-center text-white">
        <h4 class="mb-3 mb-md-0">Catégorie existantes</h4>
      </div>
      @if ($cat->count() > 0)
        @foreach ($cat as $list )
        <div class="col-12 card p-4 mt-4 d-flex">
          <div class="body-cart">
            <span class="col-4 text-uppercase h6">{{ $list->name }}</span>
            <a href='{{ route('modifycategory', $list->id) }}'><button class="col-2 btn btn-success">Modifier</button></a>
            <button class="col-2 btn btn-secondary">Désactiver</button>
            <button class="col-2 btn btn-danger">Supprimer</button>
          </div>
        </div>
      @endforeach
      @else
        <div class="col-12 card p-4 mt-4 d-flex">
          <div class="body-cart">
            <span class="col-4 text-uppercase h6">Aucune Cathegorie enregistrée</span>
          </div>
        </div>
      @endif
    </div> --> --}}
  </div>

  @include('admin/partials/footer')
  @endsection