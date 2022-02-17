

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
    <div class="mb-3">
        <h4 class="mb-3 mb-md-0">Ajouter une nouvelle Sous catégorie <a href="{{ route('add.souscategory') }}"><button class="btn btn-primary">Ajouter</button></a></h4>
    </div>
    {{-- <div class="card p-4">
      <form method='POST' action='{{ route('addcategory') }}'>
      
        @csrf
        <div class="form-group">
          <label >Nom de la catégories</label>
          <input type="text" class="form-control" id="nomcategorie" name="name">
        </div>
        <div class="form-group">
          <label>Surnom de la catégories</label>
          <input type="text" class="form-control" id="surnomcategorie" name="surnomcategorie">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
    </div>  --}}
    <div class="card-body ">
      {{-- @if ( $cat->count() > 0 ) --}}
        <table id="example2" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>Sous Cathegories</th>
              <th>Cathegories</th>
              <th colspan="2">Actions</th>
            </tr>
          </thead>
            @foreach ($cat as $sous_categorie)
              <tbody>
                <tr>
                  <td>{{$sous_categorie}}</td>
                  {{-- <td>{{$list->categorie->name}}</td> --}}
                  {{-- <td><a href='{{ route('modify.souscategory', $list->id) }}'><button class="col-12 btn btn-success">Modifier</button></a></td> --}}
                  {{-- <td> <a href='{{ route('delete.souscategory', $list->id) }}'><button class="col-12 btn btn-danger">Supprimer</button></a></td> --}}
                </tr>
              </tfoot>
            @endforeach
        </table>
      {{-- @else --}}
        <div class="col-12 card p-4 mt-4 d-flex">
          <div class="body-cart">
            <span class="col-4 text-uppercase h6">Aucune Cathegorie enregistrée</span>
          </div>
        </div>
      {{-- @endif --}}
    </div>
  </div>
          
	@include('admin/partials/footer')
@endsection
