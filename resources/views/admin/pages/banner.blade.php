<style>
  .bg-titre{
    background-color: rgb(255, 255, 255, 0.7);
  }
  .single-slider{
    height: auto !important;
    background-image: url("{{asset('images/'. $banner->pluck('image')->last())}}") !important;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    height: 510px !important;
  }
   .hero-text {
    padding: 0 30px !important;
    margin-top:100px !important;
  }
   .hero-text h1 {
    line-height: 50px !important;
    font-size: 47px !important;
    font-weight: 700 !important;
    color: #F7941D !important;
    margin-bottom: 20px !important;
  }
   .hero-text h1 span {
    font-size: 20px !important;
    display: block !important;
    margin-bottom: 12px !important;
    color: #333 !important;
    font-weight: 700 !important;
    line-height: initial !important;
  }
   .hero-text p {
    color: #333 !important;
    margin-bottom: 35px !important;
  }
   .hero-text .button{
    margin:0 !important;
  }
   .hero-text .btn {
    color: #fff !important;
    background: #333 !important;
    padding: 13px 30px !important;
    line-height: initial !important;
    border: none !important;
    height: auto !important;
    z-index: 0 !important;
  }
  .hero-text .btn:hover{
    background:#F7941D !important;
    color:#fff !important;
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
  {{-- {{dd($banner->pluck('id')->last())}} --}}
  {{-- @foreach ($banner as $banner)
      
  @endforeach --}}
	<div class="page-content">
        <div class="mb-3">
            <h4 class="mb-3 mb-md-0">Modifier la bannier du site</h4>
          </div>

         
          {{-- <div class="bg-primary p-2">
            <h4 class="text-white text-center">Bannière actuellement sur le site</h4>
          </div> --}}

          <div class="single-slider">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-9 offset-lg-3 col-12">
                        <div class="text-inner">
                            <div class="row">
                                <div class="col-lg-7 col-12">
                                    <div class="hero-text bg-titre p-4 ">
                                        <h1>{{$banner->pluck('titre')->last()}}</h1>
                                        <p class="text-dark h5">{{$banner->pluck('description')->last()}}</p>
                                        <div class="button">
                                            <a href="{{$banner->pluck('lien-href')->last()}}" class="btn">{{$banner->pluck('lien-text')->last()}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <a href="/banner/edit" class="col btn btn-primary">Modifier la bannière</a>
        {{-- <div class="card p-4 shadow">
          <form>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label>Nom du produit</label>
                <input type="text" class="form-control" name="nomproduit" id="nomproduit">
              </div>
              <div class="form-group col-md-4">
                    <label>Marque du produit</label>
                    <input type="text" class="form-control" name="marqueproduit" id="marqueproduit">
              </div>
              <div class="form-group col-md-4">
                    <label>Quantité</label>
                    <input type="number" class="form-control" name="quantiteproduit" id="quantiteproduit">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                  <label>Catégorie</label>
                  <select id="categorieproduit" name="categorieproduit" class="form-control">
                    <option selected>Electronique</option>
                    <option>Informatique</option>
                    <option>Maison</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label>Prix produit</label>
                  <input type="text" class="form-control" name="prixproduit" id="prixproduit">
                </div>  
                <div class="form-group col-md-4">
                  <label>Image du produit</label> 
                  <input type="file" class="form-control-file" id="photo" name="photo">
                </div>  
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                  <label>Couleur du produit</label>
                  <input type="text" class="form-control" name="couleurproduit" id="couleurproduit">
                </div> 
                <div class="form-group col-md-3">
                  <label>UGS produit</label>
                  <input type="text" class="form-control" name="ugsproduit" id="ugsproduit">
                </div> 
                <div class="form-group col-md-6">
                  <label>Description du produit</label>
                  <textarea class="form-control" name="description" id="description" cols="10" rows="5"></textarea>
              </div>
              </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </form>
        </div> --}}
          
	@include('admin/partials/footer')
@endsection
