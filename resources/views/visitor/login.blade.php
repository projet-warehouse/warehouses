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
								<li class="active"><a href="/login">Se connecter</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Shop Login -->
		<section class="shop login section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Se connecter</h2>
							<p>Veuillez vous inscrire afin de pouvoir valider votre commande</p>
							<!-- Form -->
							<form class="form" method="post" action="#">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Email<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Mot de Passe<span>*</span></label>
											<input type="password" name="password" placeholder="" required="required">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">Se connecter</button>
											<a href="/register" class="btn">CRÉER VOTRE COMPTE</a>
										</div>
										<div class="checkbox">
											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Se souvenir de moi</label>
										</div>
										<a href="" class="lost-pass">Mot de passe oublié?</a>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Login -->
		
	<!--debut footer-->

	@include('layout/footer')

	<!--fin footer-->
			
@endsection