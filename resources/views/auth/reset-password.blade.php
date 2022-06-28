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
        <p class="title mb-1">Setel ulang password Anda🔓 </p>
        <p class="_text">Masukkan password baru Anda</p>

        <x-slot name="logo">
            <img style="display:none" src="{{ asset('image/logo.png') }}" />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" style="margin-top:24px; font-size:16px; color:#343A40" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" style="font-size:16px; color:#343A40" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Masukkan Password baru Anda" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" style="font-size:16px; color:#343A40" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" placeholder="Masukkan kembali Password baru Anda" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="py-2" style="background-color:#28DF99; width:100%; color:white; border-radius:6px">
                        {{ __('Ubah Password') }}
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
    <div style="height: 8%; background-color:rgb(243 244 246)"></div>
</x-guest-layout>
