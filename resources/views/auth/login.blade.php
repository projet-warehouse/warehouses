<<<<<<< HEAD
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Souviens-toi de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
=======
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
											<label class="checkbox-inline" for="2 remember_me"><input id="remember_me" name="remember" type="checkbox">{{ __('Remember me') }}</label>
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
>>>>>>> rod90
