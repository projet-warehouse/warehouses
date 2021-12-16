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

   <div class="account__card border-bottom-0 border-left-0 border-top-0 border-right-0 h-100">
       <div class="account__card--header">
          <h3 class="account__card--title"> Vos commandes</h3>          
       </div>

       <div class="d-flex justify-content-around text-uppercase my-4 h6">
        <div><a href="/myaccount/order/index" class="border border-bottom border-left-0 border-top-0 border-right-0 p-2 mb-6">Commandes en cours (03)</a></div>
        <div><a href="/myaccount/order/close" class="border border-bottom border-left-0 border-top-0 border-right-0 p-2 concurrent-order">Commandes terminées (02)</a></div>
    </div>

        <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset('images/reveil.jpg')}}" class="card-img" alt="..." style="max-width:150px">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title"> Chaud Nouveau Réveil Rétro-éclairage Grand Affichage 
                    électronique LCD Réveil Numérique--Blanc</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden">
                    Commande N°01
                    </p>
                </div>
                <p class="card-text"><small class="text-dark h6">Le 01 Novembre 2021</small></p>
                <div class="bg-success px-3 orderStatus" id=""> LIVREE</div>
              </div>
                <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                    <a href="" class="p-2">Détails</a>
                </div>
            </div>
        </div>
    
        <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset('images/tv.jpg')}}" class="card-img" alt="..." style="max-width:150px">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">Moulinex Bouilloire Soleil 1.7L Ivoire BY320A10</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden">
                    Commande N°04
                    </p>
                </div>
                <p class="card-text"><small class="text-dark h6">Le 15 Décembre 2021</small></p>
                <div class="bg-secondary px-3 orderStatus" id=""> ANNULEE</div>
              </div>
                <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                    <a href="" class="p-2">Détails</a>
                </div>
            </div>
        </div>

 </div>
</section>

<!-- my account end -->

<!--debut footer-->
<div class="mt-5">
    @include('layout/footer')

</div>
<!--fin footer-->
        
@endsection