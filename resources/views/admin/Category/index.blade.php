@extends('admin.home')
@section('admin_content')

<div class="container bg-danger p-5 m">
  <h1>Bienvenue à la page officielle category</h1>
</div>
            <nav class="page-breadcrumb p-3">
			  <ol class="breadcrumb">
				  <li class="breadcrumb-item"><a href="#">Category</a></li>
				  <li class="breadcrumb-item active" aria-current="page">Data Table</li>
			  </ol>
			</nav>

			<div class="row">
			  <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables Documentation </a>for a full list of instructions and other options.</p>
              
                @if(session('Catupdated'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('Catupdated')}}</strong>
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

                
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                    <tr>
                        <th class="wd-15p">Id</th>
                        <th class="wd-15p">Nom Categorie</th>
                        <th class="wd-20p">Status</th>  
                        <th class="wd-25p">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <!-- Inscrimenter 1 à + -->
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            @if($category->status == 1)
                            <span class="badge badge-success">Active</span>
                            @else 
                            <span class="badge badge-danger">Iactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/categories/edit/'.$category->id) }}" class="btn btn-sm btn-success"><i data-feather="edit"></i></a>
                            <a href="{{ url('admin/categories/delete/'.$category->id) }}" class="btn btn-sm btn-danger"><i data-feather="delete"></i></a>
                            @if($category->status == 1)
                            <a href="{{ url('admin/categories/inactive/'.$category->id) }}" class="btn btn-sm btn-danger">Desactivé</a>
                            @else
                            <a href="{{ url('admin/categories/active/'.$category->id) }}" class="btn btn-sm btn-success">Activé</a>
                            @endif
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
              </div>
		    </div>

            <!-- Parite ajouter une categories -->
            <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ajouter Une Nouvelle Categorie
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif

                    <form action="{{ route('store.category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1"> Category</label>
                          <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer nom du Catégorie">

                          @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                          @enderror

                        </div>

                        <button type="submit" class="btn btn-primary px-5">Ajouter</button>
                      </form>


 

                </div>
            </div>
            </div>
	</div>

@endsection
