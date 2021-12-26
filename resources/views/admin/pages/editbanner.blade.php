<style>
  .single-slider{
      background-image: url("{{asset('images/home_cinema.jpg')}}");
      height: 300px !important;
  }
  .hero-text{
    margin-top:50px;
  }
</style>

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
        <div class="mb-3">
            <h4 class="mb-3 mb-md-0">Modifier la bannier du site</h4>
          </div>
          @if ($errors->any())
                <div class="w-4/5 m-auto">
                  <div class=" h4 p-2 bg-danger text-white">Une s'est produite</div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class=" text-danger p-2">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
          @endif

        <div class="card p-4 shadow">
          <form action="" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Titre de la promotion</label>
                <input type="text" class="form-control" name="titre" id="nomproduit">
              </div>
              <div class="form-group col-md-6">
                <label>Description de la promotion</label>
                <input type="text" class="form-control" name="description" id="marqueproduit">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Lien vers la page</label>
                <input type="text" class="form-control" name="lien-href" id="nomproduit">
              </div>
              <div class="form-group col-md-6">
                    <label>Texte du lien</label>
                    <input type="text" class="form-control" name="lien-text" id="marqueproduit">
              </div>
            </div>
            <div class="form-row">
              {{-- <div class="form-group col-md-6">
                <p>Coluer du button</p>
                <div class="mt-4">
                  <label class="inline-flex items-center">
                    <input type="radio" class="form-radio" name="category" value="HTML">
                    <span class="ml-2">HTML</span>
                  </label>
                  <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="category" value="CSS">
                    <span class="ml-2">CSS</span>
                  </label>
                  <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="category" value="PHP">
                    <span class="ml-2">PHP</span>
                  </label>
                  <label class="inline-flex items-center ml-6">
                    <input type="radio" class="form-radio" name="category" value="frameworks/Bibliothèques">
                    <span class="ml-2">Frameworks/Bibliothèques</span>
                  </label>
                </div>
              </div> --}}
              <div class="form-group col-md-6">
                <label>Image de la promotion</label> 
                <input type="file" class="form-control-file" id="photo" name="image">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>
        </div>
          
	@include('admin/partials/footer')
@endsection
