@extends('layouts.halaman')
@section('title', 'Profile')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{background-color: #B0D1FC !important}

    .subjudul {
        position: relative;
        background-color: #011D83;
        border-radius: 40px;
        width: 20%;
        height: 50px;
        margin-left: 105px;
        margin-top: 60px;
        margin-bottom: -20px;
        border-radius: 20px;
        box-shadow: 3px 3px 3px;
        z-index: 1;
    }

    .profilebox {
        background-color: white;
        border-radius: 20px;
        width: 90%;
        height: auto;
        padding: 50px;
        margin-left: 35px;
        margin-top: -5px;
        margin-bottom: 30px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;
    }

    .kotakprofil {
        background-color: #fff;
        border-radius: 30px;
        width: 1045px;
        height: auto;
        margin-left: 20px;
        margin-bottom: 10px;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil {
        background-color: #fff;
        border-radius: 30px;
        width: 1045px;
        height: auto;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 30px;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil p {
        font-size: 25px;
        color: white;
    }

    #pembatas1 p {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid white; 
        line-height: 0.1em;
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        color: white;
        font-size: 30px;
    } 

    #pembatas span { 
        background: #011D83; 
        padding:0 10px; 

    }

    #pembatas1 {
        background-color: #011D83;
        border-radius: 20px;
        width: 1045px;
        height:50px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }

    #form-control{
        max-width: 75px;
    }
    .image-upload>input {
    display: none;
    }
</style>
@endsection

@section('isi')
<x-app-layout>
    <div class="subjudul d-flex">
        <p class="mx-auto my-auto" style="font-size: 30px; color:white;">Profile</p>
    </div>
    <div class="profilebox mx-auto">
        <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data" class="mt-6 space-y-6">
            @csrf
            @method('patch')
            <div class="iniform">
                <div class="d-flex flex-row">
                    <div class="kotakprofil d-flex flex-row mx-auto">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <img class="m-3" src="{{ asset('app/'.$user->photo) }}" style="border:1px solid gray;border-radius:15px;width:250px; height:auto;"/>
                            
                            <div class="image-upload">
                                <label for="photo">
                                    <img src="{{ asset('app/assets/image/edit.png') }}" class="rounded-circle" style="width:47px; height:47px; border: 2px solid #011D83; cursor: pointer; background-color: black;"/>
                                </label>

                                <input disabled id="photo" name="photo" type="file" class="mt-1 block w-full" :value="old('photo', $user->photo)" autofocus autocomplete="photo" style="display: none;" />
                            </div>

                            <!-- <a href="/" class="tombol d-flex justify-content-center rounded-circle mx-auto " style="background-color:#001560; border:3px solid #001560;  margin-top: -45px; "><img src="{{ asset('app/assets/image/edit.png') }}" style="width:47px; height:47px;"/></a> -->
                        </div>
                        <div class="biodataSingkat my-auto mx-auto form-group col-lg-8">
                            <!-- Username -->
                            <div>
                                <x-input-label for="username" :value="__('Username')" />
                                <x-text-input disabled id="username" name="username" type="text" class="mt-1 block w-full" :value="old('username', $user->username)" required autofocus autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('username')" />
                            </div>
                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input disabled id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <!-- NPWP -->
                            <div>
                                <x-input-label for="npwp" :value="__('NPWP')" />
                                <x-text-input disabled id="npwp" name="npwp" type="text" class="mt-1 block w-full" :value="old('npwp', $user->npwp)" required autofocus autocomplete="npwp" />
                                <x-input-error class="mt-2" :messages="$errors->get('npwp')" />
                            </div>
                        </div>
                    </div>
                </div>
        
                    <div class="">
                        <div class="mt-5">
                            <div id="pembatas1" class="d-flex justify-content-center">
                                <p id="pembatas" class="align-items-center my-auto"><span>User Profile</span></p>
                            </div>
                        </div>
                        <div class="userprofil" style="height: 180px;">
                            <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                                <!-- First Name -->
                                <div>
                                    <x-input-label for="firstname" :value="__('First Name')" />
                                    <x-text-input disabled id="firstname" name="firstname" type="text" class="mt-1 block w-full" :value="old('firstname', $user->firstname)" required autofocus autocomplete="firstname" />
                                    <x-input-error class="mt-2" :messages="$errors->get('firstname')" />
                                </div>
                                <!-- Last Name -->
                                <div>
                                    <x-input-label for="lastname" :value="__('Last Name')" />
                                    <x-text-input disabled id="lastname" name="lastname" type="text" class="mt-1 block w-full" :value="old('lastname', $user->lastname)" required autofocus autocomplete="lastname" />
                                    <x-input-error class="mt-2" :messages="$errors->get('lastname')" />
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div id="pembatas1" class="d-flex justify-content-center">
                                <p id="pembatas" class="align-items-center my-auto"><span>Company Profile</span></p>
                            </div>
                        </div>
                        <div class="userprofil" style="height: 300px;">
                            <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                                <!-- Company -->
                                <div>
                                    <x-input-label for="company" :value="__('Company')" />
                                    <x-text-input disabled id="company" name="company" type="text" class="mt-1 block w-full" :value="old('company', $user->company)" required autofocus autocomplete="company" />
                                    <x-input-error class="mt-2" :messages="$errors->get('company')" />
                                </div>
                                <!-- Email Company -->
                                <div>
                                    <x-input-label for="emailcompany" :value="__('Email Company')" />
                                    <x-text-input disabled id="emailcompany" name="emailcompany" type="email" class="mt-1 block w-full" :value="old('emailcompany', $user->emailcompany)" required autocomplete="emailcompany" />
                                    <x-input-error class="mt-2" :messages="$errors->get('emailcompany')" />

                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                        <div>
                                            <p class="text-sm mt-2 text-gray-800">
                                                {{ __('Your email address is unverified.') }}

                                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                </p>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                                <!-- Nomor Telepon  -->
                                <div>
                                    <x-input-label for="notelp" :value="__('Nomor Telepon')" />
                                    <x-text-input disabled id="notelp" name="notelp" type="text" class="mt-1 block w-full" :value="old('notelp', $user->notelp)" required autofocus autocomplete="notelp" />
                                    <x-input-error class="mt-2" :messages="$errors->get('notelp')" />
                                </div>
                                <!-- NIB -->
                                <div>
                                    <x-input-label for="nib" :value="__('NIB')" />
                                    <x-text-input disabled id="nib" name="nib" type="text" class="mt-1 block w-full" :value="old('nib', $user->nib)" required autofocus autocomplete="nib"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('nib')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="subjudul d-flex">
        <p class="mx-auto my-auto" style="font-size: 30px; color:white;">History</p>
    </div>
    <div class="profilebox mx-auto">
        <div class="mt-5">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Booking History</span></p>
            </div>
        </div>
        <div class="userprofil">
            <table class="table table-striped hover table-bordered">
                <thead>
                    <tr style="border-bottom: 1px solid black;">
                        <th style="width: auto;">ID</th>
                        <th style="width: auto;">Order Date</th>
                        <th style="width: auto;">Shipper</th>
                        <th style="width: auto;">Cosignee</th>
                        <th style="width: auto;">Status</th>
                        <th style="width: auto;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->shipper }}</td>
                        <td>{{ $order->cosignee }}</td>
                        @if( $order->accept == 1)
                            <td>Accepted</td>
                        @else
                            <td>Waiting</td>
                        @endif
                        <td>
                            <a href="#" class="btn btn-primary" style="text-decoration: none; color: white;">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
@endsection