<x-guest-layout>
    <x-jet-authentication-card>
        @section('titre')

        Mot de passe oublié
            
        @endsection
        <x-slot name="logo">
            <center> <a href="/"><img src="/assets/images/emyo.png" alt="logo" style="width:30%;margin-bottom:-45px;"></a></center>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
          Mot de passe oublié ? Pas de soucis.Veuillez juste entrer votre adresse email. Nous vous enverrons un lien pour le réinitialiser.
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="Email" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="text-center m-3">
                <button class="btn btn-primary">
                    M'envoyer le lien de réinitialisation
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
