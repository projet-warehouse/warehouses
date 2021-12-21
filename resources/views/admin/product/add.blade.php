@extends('admin.home')
@section('admin_content')

<div class="container bg-danger p-3">
  <h3>Bienvenue à la page officielle des gestions de Produits</h3>
</div>

      <div class="row row-sm mt-2 ">
      
        <div class="card pd-20 pd-sm-40 p-5">
            <h6 class="card-body-title pb-1">Ajouter New Produit</h6>
        <form action="{{ route('store-products') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-layout">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
              <div class="row mg-b-25">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nom du produit: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_name" value="{{ old('product_name') }}" placeholder="Nom duproduit">
                    @error('product_name')
                       <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">produit_code: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="product_code" value="{{ old('product_code') }}" placeholder="Code produit">
                    @error('product_code')
                    <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="price" value="{{ old('price') }}" placeholder="Prix du produit">
                    @error('price')
                    <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->

                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" name="product_quantity" value="{{ old('product_quantity') }}" placeholder="Quantité du produit">
                      @error('product_quantity')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->
               
                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Categories: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" name="category_id" data-placeholder="Choisie Categorie">
                      <option label="Choose category"></option>
                        @foreach ($categories as $category)                            
                      <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                      @endforeach
    
                    </select>
                    @error('category_id')
                    <strong class="text-danger">{{ $message }}</strong> 
                    @enderror
                  </div>
                </div><!-- col-4 -->
              
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label"> Petite Description: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" name="short_description" id="summernote"></textarea>
                      @error('short_description')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->


                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="form-control-label">Longue Description: <span class="tx-danger">*</span></label>
                      <textarea class="form-control" name="long_description" id="summernote2"></textarea>
                      @error('long_description')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                  
                <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Image Principale: <span class="text-danger">*</span></label>
                      <input class="form-control" type="file" name="image_one" >
                      @error('image_one')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Image 2: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image_two" >
                      @error('image_two')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->

                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Image 3: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="file" name="image_three" >
                      @error('image_three')
                      <strong class="text-danger">{{ $message }}</strong> 
                      @enderror
                    </div>
                  </div><!-- col-4 -->              
                  
              </div><!-- row -->
  
              <div class="form-layout-footer">
                <button class="btn btn-info mg-r-5"> Ajouter son produit</button>
              </div><!-- form-layout-footer -->
            </form>
            </div><!-- form-layout -->
          </div><!-- card -->
    </div>

@endsection
