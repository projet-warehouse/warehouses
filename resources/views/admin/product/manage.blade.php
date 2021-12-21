@extends('admin.home')
@section('admin_content')

<div class="container bg-danger p-5">
  <h3>Bienvenue à la page officielle des gestions de Produits</h3>
</div>
      <nav class="page-breadcrumb p-3">
			  <ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="#">Produits</a></li>
				  <li class="breadcrumb-item active" aria-current="page">Data Table</li>
			  </ol>
			</nav>
      <div class="row row-sm">
        <div class="col-md-12 ">  
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('success')}}</strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @endif 
            
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('status')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  

            @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{session('delete')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif  
              <div class="card pd-20 pd-sm-40 p-2">
                <h6 class="card-body-title">Products List</h6>    
                <div class="table-wrapper">
                  <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                      <tr>
                        <th class="wd-15p">Image</th>
                        <th class="wd-15p">Nom du Produit</th>
                        <th class="wd-15p">Produit Quantité</th>
                        <th class="wd-15p">Categories</th>
                        <th class="wd-20p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($products as $row)
                      <tr>
                        <td>
                            <img src="{{ asset($row->image_one) }}" width="50px;" height="50px;" alt="">
                        </td>
                        <td>{{ $row->product_name }}</td>
                        <td>{{ $row->product_quantity }}</td>
                        <td>{{ $row->category->category_name }}</td>
                        <td>
                            @if($row->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else 
                            <span class="badge badge-danger">Iactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/products/edit/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                            <a href="{{ url('admin/products/delete/'.$row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are You Shure To Delete')"><i class="fa fa-trash"></i></a>
                            @if($row->status == 1)
                            <a href="{{ url('admin/products/inactive/'.$row->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-arrow-down"></i></a>
                            @else
                            <a href="{{ url('admin/products/active/'.$row->id) }}" class="btn btn-sm btn-success"><i class="fa fa-arrow-up"></i></a>
                            @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div><!-- table-wrapper -->
              </div><!-- card -->
        </div>

    </div>
@endsection
