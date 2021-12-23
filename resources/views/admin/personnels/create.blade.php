@extends('admin.partials.base')

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
        </ol>
    </nav>

    <div class="card p-4">
        <form method="POST" action="{{ route('admin.personnels.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="{{ old('name') }}">
                </div>
                <div class="form-group col-md-6">
                    <label >Email</label>
                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Contact</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Fonction</label>
                    <input type="text" class="form-control" name="fonction" id="fonction" value="{{ old('fonction') }}">
                </div>
                <!--div class="form-group col-md-6">
                    <label >Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="" name="password">
                </div-->
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label >Date d'embauche:</label>
                    <input type="date" class="form-control" id="date_embauche" placeholder="" name="date_embauche" value="{{ old('date_embauche') }}">
                </div>
                <div class="form-group col-md-6">
                    <label >Salaire:</label>
                    <input type="number" class="form-control" id="salaire" placeholder="" name="salaire" value="{{ old('salaire') }}">
                </div>
                <div class="form-group col-md-12">
                    <label >Lieu d'habitation:</label>
                    <input type="text" class="form-control" id="adresse" placeholder="" name="adresse" value="{{ old('adresse') }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('admin.personnels.index') }}" class="btn btn-default">Annuler</a>
          </form>
    </div>
@endsection
