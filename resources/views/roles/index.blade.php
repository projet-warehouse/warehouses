@extends('admin.partials.base')

@section('content')

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fonctions</li>
        </ol>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6 class="card-title">Listes des Fonction</h6>
                        </div>
                        <div class="col-6">
                            <div class="" style="float: right"><a href="{{ route('roles.create')}}"> Créer une fonction</a></div>
                        </div>
                    </div>
                    <p class="card-description">Ce tableau ennumère toutes les fonctions disponible dans le système de gestion de WAREHOUSE.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Actions Rapides</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tr>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {!! $roles->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
