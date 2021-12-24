@extends('admin.partials.base')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>
    </nav>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Création d'un nouvelle fonction</h5>
            </div>
            <br>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
    @endif

    <div class="card p-4">
        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nom</label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
                <div class="form-group col-md-6">
                    <label>Permissions</label>
                    @foreach($permission as $value)
                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('roles.index') }}" class="btn btn-default">Annuler</a>
        {!! Form::close() !!}
    </div>
@endsection
