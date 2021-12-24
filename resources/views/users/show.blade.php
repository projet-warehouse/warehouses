@extends('admin.partials.base')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="m-auto">
                <img class="rounded-circle"  src="image/makeup.jpg" alt="" style="width: 250px; height: 250px;">
            </div>
            <div class="col-12   rounded p-2">
                <div class="row mb-4 ">
                    <div class="col-5 m-auto  text-center  shadow" >
                        <h6>Nom et Prenoms</h6>
                        <h6>{{ $user->name }}</h6>
                    </div>

                    <div class="col-5 m-auto text-center shadow"  >
                        <h6>E-mail</h6>
                        <h6>{{ $user->email }}</h6>
                    </div>
                </div>

                <div class="row mb-4 ">
                    <div class="col-5 my-2 m-auto mt-3 text-center shadow" >
                        <h6>Contact</h6>
                        <h6>{{ $user->phone }}</h6>
                    </div>

                    <div class="col-5 m-auto text-center shadow" >
                        <h6>Fonction</h6>
                        <h6>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                            @endif
                        </h6>
                    </div>
                </div>

                <div class="row  ">
                    <div class="col-5 m-auto d-flex justify-content-center" >
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Modifier</a>
                        <a href="{{ route('users.index') }}" class="btn btn-default">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
