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
                        <li><a href="/myaccount">Mon compte</a><i class="ti-arrow-right"></i></li>
                        <li class="active"><a href="/myaccount/inbox">Boîte de réception</a></li>
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
          <h3 class="account__card--title"> Messages</h3>          
       </div>

       <div class="border"> 
            <div class="card mt-3 mb-3 mx-4 p-3 d-flex border-bottom-0 border-left-0 border-top-0 border-right-0 p-2" style="">
                  <div class="row no-gutters">
                    <!-- <div class="col-md-3">
                      <img src="{{asset('images/iphone.png')}}" class="card-img" alt="..." style="max-width:150px">
                    </div> -->
                    <div class="col-md-10">
                    <p class="card-text" style="max-height:200px; overflow:hidden">
                           15 decembre
                          </p>
                      <div class="card-body">
                        <h5 class="card-title">Expedier de l'etranger</h5>
                        <p class="card-text" style="max-height:200px; overflow:hidden">
                          les articles de votre commande 356879890 a (ont) été expetié (s).la livraison est prevu entre le 10/01/2022 et 15/01/2022.
                          Vous pouvez suivre l'etat de votre colis sur l'onglet mes commandes. Nous vous contacterons une fois le colis pret a etre recuperé.
                          Nous vous remercions pour vos achats sur werehouse, a bientot 
                          </p>
                      </div>
                      <!-- <p class="card-text"><small class="text-dark h6">Le 13 Novembre 2021</small></p>
                      <div class="bg-primary px-3 orderStatus" id=""> EN PRÉPARATION</div> -->
                    </div>
                      <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                          <a href="" class="p-2">Détails</a>
                      </div>
                  </div>
              </div>

            <div class="card mt-3 mb-3 mx-4 p-3 d-flex col-6" style="">
                  <div class="row no-gutters">
                    <div class="col-md-3">
                      <img src="{{asset('images/iphone.png')}}" class="card-img" alt="..." style="max-width:150px">
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">congelateur 128 L</h5>
                        <!-- <p class="card-text" style="max-height:200px; overflow:hidden">
                            Commande N°02
                          </p> -->
                      </div>
                      <!-- <p class="card-text"><small class="text-dark h6">Le 13 Novembre 2021</small></p>
                      <div class="bg-primary px-3 orderStatus" id=""> EN PRÉPARATION</div> -->
                    </div>
                      <!-- <div class="col-md-2 detail align-items-end" style="text-align: end; color:#f7941d;">
                          <a href="" class="p-2">Détails</a>
                      </div> -->
                  </div>
              </div>
       </div>
    
<!-- <div>
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
</div> -->

        <!-- <div class="card mt-3 mb-3 mx-4 p-3 d-flex" style="">
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
        </div> -->

 </div>
</section>

<!-- my account end -->

<!--debut footer-->
<div class="mt-5">
    @include('layout/footer')

</div>
<!--fin footer-->
        
@endsection