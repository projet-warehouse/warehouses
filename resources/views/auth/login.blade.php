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

                            @if (session('status'))
                                <div class="">
                                    {{ session('status') }}
                                </div>
                            @endif
							<form class="form" method="post" action="{{ route('login') }}">
                                @csrf
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="email" value="{{ __('Email') }}">Email<span>*</span></label>
											<input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="password" value="{{ __('Password') }}">Mot de Passe<span>*</span></label>
											<input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">{{ __('Log in') }}</button>
											<a href="/register" class="btn">S'enregister</a>
										</div>
										<div class="checkbox">
											<input id="remember_me" name="remember" type="checkbox"><span>{{ __('Remember me') }}</span>
										</div>
                                        @if (Route::has('password.request'))
                                            <a class="lost-pass" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
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
