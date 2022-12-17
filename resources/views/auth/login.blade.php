@extends('layouts.halaman')
@section('title', 'Login')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{
        background-color: #B0D1FC !important;
        /* background-image: url(" {{ asset('app/assets/image/bg_login.png') }}");
        background-repeat: no-repeat; 
        background-size: 100%; */
        /* background-image: linear-gradient(to bottom, #B0D1FC, #001560); */
        /* background-repeat: no-repeat;  */
        /* background-size: 100%; */
        /* height: 120%; */
        /* height: 757px; */
    }

    .outside {
        display: flex;
        justify-content: space-around;
    }

    .form-login {
        background-color: white;
        border-radius: 20px;
        box-shadow: 10px 10px #001560;
        padding: 30px;
    }

    .form-login {
        width: 500px;
    }

    @media screen and (max-width: 940px) {
        .outside {
            flex-direction: column;
        }

        .logo-text {
            margin: 0 auto 50px;
        }
        .box {
            margin-bottom: 50px;
        }
        .form-login {
            width: 450px;
        }
    }
</style>
@endsection
@section('isi')
<div class="outside my-5">
    <div class="logo-text">
        <img src="{{ asset('app/assets/image/logo_jayamas.png') }}" style="width: 200px;"/>
        <h1 style="font-family: 'Titillium Web', sans-serif; color: white;" class="mb-3"><b>PT. INDOTRANS</b></h1>
        <h1 style="font-family: 'Titillium Web', sans-serif; color: white;"><b>JAYAMAS ABADI</b></h1>
    </div>
    <div class="box">
        <div class="d-flex justify-content-center mb-5">
            <img src="{{ asset('app/assets/image/profile.png') }}" style="width: 100px;" />
            <h1 class="ms-3 my-auto" style="font-family: 'Titillium Web', sans-serif;"><b>Login</b></h1>
        </div>
        <div class="form-login mx-auto">
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div class="d-flex flex-column">
                    <x-input-label for="email" :value="__('Email')" style="font-family: 'Titillium Web', sans-serif; font-weight: bold;"/>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus style="border-radius: 5px; background-color: #D9D9D9;"/>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
    
                <!-- Password -->
                <div class="d-flex flex-column mt-4">
                    <x-input-label for="password" :value="__('Password')" style="font-family: 'Titillium Web', sans-serif; font-weight: bold;"/>
    
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" 
                                    style="border-radius: 5px; background-color: #D9D9D9;" />
    
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
    
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
    
                <div class="d-flex items-center justify-content-between mt-4">
                    @if (Route::has('password.request'))
                        <a style="text-decoration: none; color: black;" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 my-auto" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
    
                    <x-primary-button class="rounded-pill ml-3" style="background-color: #001560;">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection