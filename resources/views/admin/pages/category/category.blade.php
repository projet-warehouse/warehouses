

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
    <div class="mb-3">
      <h4 class="mb-3 mb-md-0">Ajouter une nouvelle catégorie <a href="{{ route('add.category') }}"><button class="btn btn-primary">Ajouter</button></a></h4>
    </div>
    <div>
      <div class="mt-3 bg-primary p-3 text-center text-white">
        <h4 class="mb-3 mb-md-0">Catégorie existantes</h4>
      </div>

      <div class="card-body ">
        @if ( $cat->count() > 0 )
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Categories</th>
                <th colspan="2">Actions</th>
              </tr>
            </thead>
              @foreach ($cat as $list)
                <tbody>
                  <tr>
                    <td>{{$list->name}}</td>
                    <td><a href='{{ route('modify.category', $list->id) }}'><button class="col-12 btn btn-success">Modifier</button></a></td>
                    <td><a href='{{ route('delete.category', $list->id) }}'><button class="col-12 btn btn-danger">Supprimer</button></a></td>
                  </tr>
                </tfoot>
              @endforeach
          </table>
        @else
          <div class="col-12 card p-4 mt-4 d-flex">
            <div class="body-cart">
              <span class="col-4 text-uppercase h6">Aucune Cathegorie enregistrée</span>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
          
	@include('admin/partials/footer')
@endsection
