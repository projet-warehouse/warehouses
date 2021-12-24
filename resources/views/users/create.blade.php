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
                <h5>Création d'un nouvelle utilisateur</h5>
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
        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nom & prénoms</label>
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
                <div class="form-group col-md-6">
                    <label >Email</label>
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Contact</label>
                    {!! Form::tel('phone', null, array('placeholder' => 'phone','class' => 'form-control')) !!}
                </div>
                <div class="form-group col-md-6">
                    <label >Fonction</label>
                    {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label >Mot de passe</label>
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
                <div class="form-group col-md-6">
                    <label >Confirmation de mot de passe</label>
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('users.index') }}" class="btn btn-default">Annuler</a>
        {!! Form::close() !!}
    </div>
@endsection
