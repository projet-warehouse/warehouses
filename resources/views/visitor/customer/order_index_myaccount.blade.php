@extends('layout/app')

@section('content')

<style>
.concurrent-order{
    color:#f7941d !important;
    border-color: #f7941d !important;
}
.orderStatus{
    width: 180px !important;
    text-align: center;
    color: #fff;
}
</style>
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
        <div><a href="/myaccount/order/index" class="border border-bottom border-left-0 border-top-0 border-right-0 p-2 mb-6 concurrent-order">Commandes en cours (03)</a></div>
        <div><a href="/myaccount/order/close" class="border border-bottom border-left-0 border-top-0 border-right-0 p-2 ">Commandes terminées (02)</a></div>
    </div>

        <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset('images/iphone.png')}}" class="card-img" alt="..." style="max-width:150px">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">Apple IPhone 8s - 4G LTE - 8 MP- 1Go RAM- 16Go -Or - Garantysmart 3 Mois</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden">
                      Commande N°02
                    </p>
                </div>
                <p class="card-text"><small class="text-dark h6">Le 13 Novembre 2021</small></p>
                <div class="bg-primary px-3 orderStatus" id=""> EN PRÉPARATION</div>
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
                  <h5 class="card-title">Hisense SMART TV LED 50’’ UHD – H50A7100F</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden">
                    Commande N°03
                    </p>
                </div>
                <p class="card-text"><small class="text-dark h6">Le 07 Novembre 2021</small></p>
                <div class="bg-primary px-3 orderStatus" id=""> PRÊT POUR LIVRAISON</div>
              </div>
                <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                    <a href="" class="p-2">Détails</a>
                </div>
            </div>
        </div>

        <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
            <div class="row no-gutters">
              <div class="col-md-3">
                <img src="{{asset('images/home_cinema.jpg')}}" class="card-img" alt="..." style="max-width:150px">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">Ilux Home Cinéma 5.1 - LX-882 - 100W - Noir</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden">
                    Commande N°05
                    </p>
                </div>
                <p class="card-text"><small class="text-dark h6">Le 15 Novembre 2021</small></p>
                <div class="bg-primary px-3 orderStatus" id=""> PRÊT POUR LIVRAISON</div>
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