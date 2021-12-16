

@extends('admin.partials.panel')

@section('content')

<div class="main-wrapper">

  @include('admin/partials/sidebar')

  @include('admin/partials/navbar')

	<div class="page-content">
        <div class="mb-3">
            <h4 class="mb-3 mb-md-0">Ajouter un nouveau produit</h4>
          </div>
        <div class="card p-4">
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
        </div>
          
	@include('admin/partials/footer')
@endsection
