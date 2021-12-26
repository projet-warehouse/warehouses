@extends('admin.partials.base')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Consultation de membre du personnel</h2>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <div>
                Nom et prénoms: {{ $personnels->nom }}
            </div>
            <div>
                Téléphone: {{ $personnels->phone }}
            </div>
            <div>
                Email: {{ $personnels->email }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('admin.personnels.edit', $personnels->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('admin.personnels.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
