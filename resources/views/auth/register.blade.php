@extends('layout/app')

@section('content')

		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Accueil<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">S'enregistrer</a></li>
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
							<h2>S'enregister</h2>
							<p>Veuillez vous inscrire afin de pouvoir valider votre commande</p>
							<!-- Form -->
							<form class="form" method="post" name="myForm" onsubmit="return validateForm()" action="{{ route('register') }}">
                                @csrf
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="name" value="{{ __('Name') }}">Nom et prénoms<span>*</span></label>
											<input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="email" value="{{ __('Email') }}">Email<span>*</span></label>
											<input id="email" type="email" name="email" :value="old('email')" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="phone" value="{{ __('phone') }}">Numéro de Téléphone<span>*</span></label>
											<input id="phone" type="tel" name="phone" :value="old('phone')" required>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="password" value="{{ __('Password') }}">Mot de Passe<span>*</span></label>
											<input id="password" type="password" name="password" required autocomplete="new-password">
                                            <strong class="error" id="errormdp"></strong>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmer votre Mot de Passe<span>*</span></label>
											<input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
                                            <strong class="error" id="errormdp"></strong>
										</div>
									</div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="col-12">
                                            <label for="terms">
                                                <div class="form-group">
                                                    <input name="terms" id="terms" type="checkbox"/>

                                                    <div class="">
                                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    @endif
									<div class="col-12">
										<div class="form-group login-btn">
											<button class="btn" type="submit">{{ __('Register') }}</button>
											<a href="{{ route('login')}}" class="">{{ __('Already registered?') }}</a>
										</div>
										<div class="checkbox">
											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">S'inscrire au Newsletter</label>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
                            <script>
                                function validateForm()
                                {
                                    var password = document.forms["myForm"]["password"];
                                    var password_confirmation = document.forms["myForm"]["password_confirmation"];

                                    if (password.value ==! password_confirmation.value){
                                        document.getElementById('errormdp').innerHTML="les mots de passe ne sont pas identiques";
                                        password_confirmation.focus();
                                        return false;
                                    }else{
                                        document.getElementById('errormdp').innerHTML="";
                                    }
                                }
                             </script>
                             <style>
                                .error{
                                   color: #D8000C;
                                   background-color: #FFBABA;
                                }
                             </style>
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
