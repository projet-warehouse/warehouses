<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
<<<<<<< HEAD
            
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __("Merci pour votre inscription! Avant de commencer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer par e-mail ? Si vous n'avez pas reçu l'e-mail, nous nous ferons un plaisir de vous en envoyer un autre.") }}
=======
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
>>>>>>> rod90
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
<<<<<<< HEAD
                {{ __("Un nouveau lien de vérification a été envoyé à l'adresse e-mail que vous avez fournie lors de l'inscription.") }}
=======
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
>>>>>>> rod90
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
<<<<<<< HEAD
                        {{ __("Renvoyer l'email") }}
=======
                        {{ __('Resend Verification Email') }}
>>>>>>> rod90
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
<<<<<<< HEAD
                    {{ __('Se deconnecter') }}
=======
                    {{ __('Log Out') }}
>>>>>>> rod90
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
