@extends('layouts.halaman')
@section('title', 'Register')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{
        /* background-color: #B0D1FC !important; */
        /* background-image: url(" {{ asset('app/assets/image/bg_login.png') }}"); */
        /* background-color: #B0D1FC; */
        background-image: linear-gradient(to bottom, #B0D1FC, #001560);
        background-repeat: no-repeat; 
        background-size: 100%;
    }

    .box {
        width: 90%;
        background-color: white;
        border-radius: 20px;
        padding: 30px;
    }

    .label {
        font-size: 20px;
        font-weight: bold;
    }
    
    .input {
        background-color: #D9D9D9;
        border-radius: 10px;
        border: 0;
    }
</style>
@endsection

@section('isi')
    <div class="mt-5 mb-5">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('app/assets/image/profile.png') }}" style="width:100px;" />
            <p class="align-items-center my-auto ms-5" style="font-size: 60px;">REGISTER</p>
        </div>
    </div>
    <div class="box mx-auto mb-5">
        <div class="d-flex mb-4" style="background-color: #4D65AE; border-radius: 20px 20px 10px 10px; padding: 10px;">
            <h3 class="my-auto" style="color: white; font-family: 'Titillium Web', sans-serif;">Required field is indicated by<h3><p class="my-auto" style="color: red;">*</p>
        </div>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="d-flex ms-3">
                <div class="my-auto me-3" style="background-color: black; width: 10px; height: 10px;"></div>
                <h1 class="my-auto"><b>Company Information</b></h1></ol>
            </div>
            <hr />

            <!-- Company -->
            <div class="mt-4">
               <x-input-label for="company" :value="__('Company')" class="label" style="width: 160px;" />
                <x-text-input id="company" class="block mt-1 w-full input" type="text" name="company" :value="old('company')" required style="width: 86%" />
                <x-input-error :messages="$errors->get('company')" class="mt-2" />
            </div> 

            <!-- Email Company -->
            <div class="mt-4">
                <x-input-label for="emailcompany" :value="__('Email Company')" class="label" style="width: 160px;" />
                <x-text-input id="emailcompany" class="block mt-1 w-full input" type="email" name="emailcompany" :value="old('emailcompany')" required style="width: 86%" />
                <x-input-error :messages="$errors->get('emailcompany')" class="mt-2" />
            </div>

            <!-- Nomor Telepon -->
            <div class="mt-4">
                <x-input-label for="notelp" :value="__('Nomor Telepon')" class="label" style="width: 160px;" />
                <x-text-input id="notelp" class="block mt-1 w-full input" type="text" name="notelp" :value="old('notelp')" required style="width: 86%" />
                <x-input-error :messages="$errors->get('notelp')" class="mt-2" />
            </div>

            <!-- NIB -->
            <div class="mt-4 mb-5">
                <x-input-label for="nib" :value="__('NIB')" class="label" style="width: 160px;" />
                <x-text-input id="nib" class="block mt-1 w-full input" type="text" name="nib" :value="old('nib')" required style="width: 86%" />
                <x-input-error :messages="$errors->get('nib')" class="mt-2" />
            </div>

            <hr />
            <div class="d-flex mt-5 ms-3">
                <div class="my-auto me-3" style="background-color: black; width: 10px; height: 10px;"></div>
                <h1 class="my-auto"><b>User Information</b></h1></ol>
            </div>
            <hr />

            <!-- Username -->
            <div class="mt-4">
                <x-input-label for="username" :value="__('Username')" class="label" style="width: 160px;" />
                <x-text-input id="username" class="block mt-1 w-full input" type="text" name="username" :value="old('username')" required autofocus style="width: 86%" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <!-- First Name -->
            <div class="mt-4">
                <x-input-label for="firstname" :value="__('First Name')" class="label" style="width: 160px;" />
                <x-text-input id="firstname" class="block mt-1 w-full input" type="text" name="firstname" :value="old('firstname')" required autofocus style="width: 86%" />
                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-input-label for="lastname" :value="__('Last Name')" class="label" style="width: 160px;" />
                <x-text-input id="lastname" class="block mt-1 w-full input" type="text" name="lastname" :value="old('lastname')" required autofocus style="width: 86%" />
                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="label" style="width: 160px;" />
                <x-text-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required style="width: 86%" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- NPWP -->
            <div class="mt-4">
                <x-input-label for="npwp" :value="__('NPWP')" class="label" style="width: 160px;" />
                <x-text-input id="npwp" class="block mt-1 w-full input" type="text" name="npwp" :value="old('npwp')" required style="width: 86%" />
                <x-input-error :messages="$errors->get('npwp')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" :value="__('Photo')" class="label" style="width: 160px;" />
                <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" />
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="label" style="width: 160px;" />

                <x-text-input id="password" class="block mt-1 w-full input"
                                type="password"
                                name="password"
                                required autocomplete="new-password" style="width: 86%" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="label" style="width: 160px;" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full input"
                                type="password"
                                name="password_confirmation" required style="width: 86%" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="d-flex justify-content-center mt-4">
                <x-primary-button class="ml-4" style="background-color: #213FA7; border-radius: 15px;">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection
