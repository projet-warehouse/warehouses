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
                        <li class="active"><a href="/myaccount/wishlist">Liste d'envies</a></li>
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
          <h3 class="account__card--title">Liste d'envies</h3>          
       </div>

       <div class="d-flex justify-content-around text-uppercase my-4 h6">
        <div></div>
        <div></div>
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
                  
                </div>

                
              </div>
                <div class="col-md-2 detail align-items-end ">
                <a href=""><div class="p-2 rounded text-white" style="text-align: center; font-weight: bold; background-color:orange;">Acheter</div></a>

                <a href=""><div class="p-2 mt-3 rounded" style="text-align: center; background-color:white; color: orange;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg></i>Supprimer</div></a>
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
                  <h5 class="card-title">TV SAMSUNG 4K </h5>
                  
                </div>
                <p class="card-text"></p>
                
              </div>
                <div class="col-md-2 detail align-items-end">
                <a href=""><div class="p-2 rounded text-white" style="text-align: center; font-weight: bold; background-color:orange;">Acheter</div></a>

                <a href=""><div class="p-2 mt-3 rounded" style="text-align: center; background-color:white; color: orange;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg></i>Supprimer</div></a>
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