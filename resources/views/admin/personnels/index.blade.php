   @extends('admin.partials.base')

   @section('content')

   <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
            <li class="breadcrumb-item active" aria-current="page">Membres personnels</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-title">Liste du Personnel</h6>
                        </div>
                        <div class="col-6">
                            <div class="" style="float: right"><a href="{{ route('admin.personnels.create')}}"> Ajouter un membre</a></div>
                        </div>
                    </div>
                    <p class="card-description">Ce tableau ennumère toutes les informations sur les membres du personnel de WAREHOUSE.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom & prénoms</th>
                                <th>Fonction</th>
                                <th>Actions Rapides</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($personnels as $key => $personnel)
                                <tr>
                                    <td>{{ $personnel->id }}</td>
                                    <td>{{ $personnel->nom }}</td>
                                    <td>{{ $personnel->fonction }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('admin.personnels.show', $personnel->id) }}">Show</a>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.personnels.edit', $personnel->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.personnels.destroy', $personnel->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   @endsection
