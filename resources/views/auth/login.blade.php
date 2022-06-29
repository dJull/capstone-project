@include('partials.navbar')
<link rel="stylesheet" href="/css/landing.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<style>
    body {
        font-family: 'Nunito';
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        color: #343A40;
    }

    ._text {
        font-size: 16px;
        color: #343A40;
    }

    .logo {
        margin: auto;
        width: 50%;
        padding-top: 40px;
        padding-bottom: 50px;
    }

    /*responsive. bljr edit sass*/
    @media only screen and (max-width: 630px) {
        .underline {
            margin-left: 30%;
        }

        .bg-white {
            width: 100px;
        }
    }
</style>

<x-guest-layout>
    <div style="height:15%; background-color:rgb(243 244 246)"></div>
    <x-jet-authentication-card class="p-5">
        <img class="logo" src="{{url('/image/logo.png')}}">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show fade in" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <p class="title mb-1">Selamat datang di Situs Web!👋</p>
        <p class="_text">Silakan Masuk ke Akun Anda dan mulai Petualangan</p>

        <x-slot name="logo">
            <img style="display:none" src="{{ asset('image/logo.png') }}" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="masuk">
            @csrf

            <div>
                <x-jet-label for="email" style="margin-top:24px; font-size:16px; color:#343A40"
                    value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" placeholder="Masukkan email Anda" type="email"
                    name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="font-size:16px; color:#343A40" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Masukkan password Anda"
                    type="password" name="password" required autocomplete="current-password" />
            </div>

            <div style="margin:3% 0 4% 0">

            </div>
            <div class="flex items-center">
                <button class="py-2" style="background-color:#28DF99; width:100%; color:white; border-radius:6px">
                    {{ __('Masuk') }}
                </button>
            </div>
            <p class="_text" style="padding-top:32px; font-family: Nunito; text-align:center">Baru di platform kami? <a
                    class="_text" style="color:#28DF99" href="{{ route('register') }}">Buat Akun</a></p>

        </form>
    </x-jet-authentication-card>
    <div style="height: 8%; background-color:rgb(243 244 246)"></div>
</x-guest-layout>