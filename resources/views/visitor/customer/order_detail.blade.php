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
                        <li><a href="/myaccount">Mon compte<i class="ti-arrow-right"></i></a></li>
                          <li class="active"><a href="/myaccount/inbox">Commandes en cours</a></li>
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
          <h3 class="account__card--title"><i class="ti-arrow-left"></i> Detail de la commande</h3>          
       </div>

       <div class="d-flex justify-content-around text-uppercase my-4 h6">
        <!-- <div><a href="/myaccount/order/index" class="border border-bottom border-left-0 border-top-0 border-right-0 p-2 mb-6 concurrent-order">Commandes en cours (03)</a></div>
        <div><a href="/myaccount/order/close" class="border border-bottom border-left-0 border-top-0 border-right-0 p-2 ">Commandes terminées (02)</a></div> -->
    </div>

        <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
            <div class="row no-gutters">
              <!-- <div class="col-md-3">
                <img src="{{asset('images/iphone.png')}}" class="card-img" alt="..." style="max-width:150px">
              </div> -->
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">commande numero 235665759</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden"> 
                    2 articles
                    </p>
                    <p class="card-text" style="max-height:200px; overflow:hidden"> 
                    Effectuées le 10-10-2010
                    </p>
                    <p class="card-text" style="max-height:200px; overflow:hidden"> 
                    total: 50000 FCFA </p>
                    </p>
                </div>
                <!-- <p class="card-text"><small class="text-dark h6">Le 13 Novembre 2021</small></p>
                <div class="bg-primary px-3 orderStatus" id=""> EN PRÉPARATION</div> -->
              </div>
                <!-- <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                    <a href="" class="p-2">Détails</a>
                </div> -->
            </div>
        </div>
            <div> <h5 >Articles dans votre commande</h5></div>
    
        <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
            <div class="row no-gutters">
              <div class="col-md-3">
              <div class="bg-primary px-3 orderStatus" id=""> Livrée</div>
                <p> Le 21-01-2022</p>
                <img src="{{asset('images/tv.jpg')}}" class="card-img" alt="..." style="max-width:150px">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title">Hisense SMART TV LED 50’’ UHD – H50A7100F</h5>
                  <p class="card-text" style="max-height:200px; overflow:hidden">
                   Quantité:1
                    </p>
                    <p class="card-text"><small class="text-dark h6">50000 f</small></p>
                </div>
                
                <!-- <div class="bg-primary px-3 orderStatus" id=""> PRÊT POUR LIVRAISON</div> -->
              </div>
                <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                    <div><a href="" class="p-2">Historique Du Colis</a></div>
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