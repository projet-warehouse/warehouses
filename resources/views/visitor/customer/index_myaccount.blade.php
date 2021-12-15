@extends('layout/app')

@section('content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="/">Acceuil<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="/login">Mon compte</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->


<!-- my account -->
<section class="account">
     @include('visitor/customer/layout/panel')
   <div class="account__card">
       <div class="account__card--header">
          <h3 class="account__card--title"> Votre compte</h3>
       </div>
       <div class="account__card--body">
           <!-- card item -->
            <div class="account__card--item">
                <h5 class="card__item--header">
                    informations personnelles
                    <i class="fas fa-pen"></i>
                </h5>
                <div class="card__item--body">
                    <p>nom d'utlisateur</p>
                    <p>email@gmail.com</p>
                    <p class="mtdp">modifier votre mot de passe</p>
                </div>   
            </div>

            <!-- card item2 -->
            <div class="account__card--item2">
                <h5 class="card__item--header">
                    addresses
                    <i class="fas fa-pen"></i>
                </h5>
                <div class="card__item--body">
                    <p>nom d'utlisateur</p>
                    <p>lieu d'habitation</p>
                </div>   
            </div>

       </div>
   </div>
</section>

<!-- my account end -->

<!--debut footer-->

@include('layout/footer')

<!--fin footer-->
        
@endsection