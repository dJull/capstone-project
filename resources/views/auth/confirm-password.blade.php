@include('partials.navbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    body{
        font-family: 'Nunito';
    }
    .title{
        font-size:24px;
        font-weight: bold;
        color: #343A40;
    }
    ._text{
        font-size:16px;
        color: #343A40;
    }
    .logo{
        margin:auto;
        width:50%;
        padding-top:40px;
        padding-bottom:50px;
    }
</style>

<x-guest-layout>
    <div style="height:15%; background-color:rgb(243 244 246)"></div>
    <x-jet-authentication-card>
        <img class="logo" src="{{url('/image/logo.png')}}">
        <x-slot name="logo">
            <img style="display:none" src="{{ asset('image/logo.png') }}" />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Harap konfirmasi kata sandi Anda sebelum melanjutkan.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" style="margin-top:24px; font-size:16px; color:#343A40" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Konfirmasi') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <div style="height: 8%; background-color:rgb(243 244 246)"></div>
</x-guest-layout>
