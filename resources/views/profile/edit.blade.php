@extends('layouts.halaman')
@section('title', 'Profile')

@section('style')
<style>

    body{background-color: #B0D1FC !important}

    .subjudul {
        position: relative;
        background-color: #011D83;
        border-radius: 40px;
        width: 20%;
        height: 50px;
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
        height: auto;
        margin-right: auto;
        margin-left: auto;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil p {
        font-size: 25px;
        color: white;
    }

    /* ini bagian tulisan di tengah garis */
    #pembatas1 p {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid white; 
        line-height: 0.1em;
        margin-top: auto;
        margin-bottom: auto;
        color: white;
    } 

    #pembatas span { 
        background: #011D83; 
        padding:0 10px; 
        margin-top: auto;
        margin-bottom: auto;
    }

    #pembatas1 {
        background-color: #011D83;
        border-radius: 20px;
        height:50px;
        margin-right: auto;
        margin-left: auto;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }
/* ... */
    #form-control{
        max-width: 75px;
    }
    .image-upload>input {
    display: none;
    }

    .table{
        overflow:auto;
    }

    /* ini bagian responsive */
    @media screen and (max-width:575px){
        .judul-atas{
            font-size: 20px;
        }
        .subjudul{
            margin-top: -70px;
            height:35px;
            width:30%;
        }
        #pembatas1{
            height:35px;
        }
    }

    @media screen and (min-width:576px){
        .judul-atas{
            font-size: 20px;
        }
        .subjudul{
            margin-top: -70px;
            height:35px;
            width:30%;
        }
        #pembatas1{
            height:35px;
        }
    }

    @media screen and (min-width:767px){
        .judul-atas{
            font-size: 20px;
        }
        .subjudul{
            margin-top: -70px;
            height:40px;
            width:25%;
        }
        #pembatas1{
            height:40px;
        }
    }

    @media screen and (min-width:992px){
        .judul-atas{
            font-size: 25px;
        }
        .subjudul{
            margin-top: -70px;
            height:46px;
            width:20%;
        }
        #pembatas1{
            height:46px;
        }
    }

    @media screen and (min-width:1200px){
        .judul-atas{
            font-size: 30px;
        }
        .subjudul{
            margin-top: -70px;   
        }
        #pembatas1{
            height:50px;
        }
    }
</style>
@endsection

@section('isi')
<x-app-layout >
    
    {{-- ini untuk edit profile pribadi --}}
    <div class="profilebox mx-auto my-5">
        <div class="subjudul d-flex mb-4">
            <p class="judul-atas titillium mx-auto my-auto text-white">Profile</p>
        </div>
        <form method="post" action="{{ route('profile.update') }}"  enctype="multipart/form-data" class="w-100 mt-5 space-y-6">
            @csrf
            @method('patch')
            <div class="kotakprofil w-100 d-flex flex-lg-row flex-column p-3 mx-auto">
                <div class="d-flex col col-lg-4 col-12 justify-content-center align-items-center flex-column">
                    <img class="m-3" src="{{ asset('app/'.$user->photo) }}" style="border:1px solid gray;border-radius:15px;width:250px; height:auto;"/>
                    
                    <div class="image-upload">
                        <label for="photo">
                            <img src="{{ asset('app/assets/image/edit.png') }}" class="rounded-circle" style="width:47px; height:47px; border: 2px solid #011D83; cursor: pointer; background-color: black;"/>
                        </label>

                        <input id="photo" name="photo" type="file" class="mt-1 block w-full" :value="old('photo', $user->photo)" autofocus autocomplete="photo" style="display: none;" />
                    </div>

                    <!-- <a href="/" class="tombol d-flex justify-content-center rounded-circle mx-auto " style="background-color:#001560; border:3px solid #001560;  margin-top: -45px; "><img src="{{ asset('app/assets/image/edit.png') }}" style="width:47px; height:47px;"/></a> -->
                </div>
                <div class="biodataSingkat col col-lg-8 col-12 my-auto mx-auto form-group col-lg-8">
                    <!-- Username -->
                    <div>
                        <x-input-label for="username" :value="__('Username')" class="w-100 titillium"/>
                        <x-text-input id="username" name="username" type="text" class="w-100 titillium mt-1 block" :value="old('username', $user->username)" required autofocus autocomplete="username" />
                        <x-input-error class="w-100 titillium mt-2" :messages="$errors->get('username')" />
                    </div>
                    <!-- Email -->
                    <div>
                        <x-input-label class="w-100 titillium" for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="w-100 titillium mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="email" />
                        <x-input-error class="w-100 titillium mt-2" :messages="$errors->get('email')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="titillium text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="titillium underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="titillium mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    <!-- NPWP -->
                    <div>
                        <x-input-label class="titillium" for="npwp" :value="__('NPWP')" />
                        <x-text-input id="npwp" name="npwp" type="text" class="titillium mt-1 block w-full" :value="old('npwp', $user->npwp)" required autofocus autocomplete="npwp" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('npwp')" />
                    </div>
                </div>
            </div>
            {{-- ini user dan company profile --}}
            <div class="mt-5 mb-4">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="judul-atas w-100 tulisan-garis titillium align-items-center my-auto"><span>User Profile</span></p>
                </div>
            </div>
            <div class="userprofil pb-2 mt-0 w-100" style="">
                <div class="biodataSingkat py-2 py-lg-4 px-auto form-group form-control-lg">
                    <!-- First Name -->
                    <div>
                        <x-input-label class="titillium" for="firstname" :value="__('First Name')" />
                        <x-text-input id="firstname" name="firstname" type="text" class="titillium mt-1 block w-full" :value="old('firstname', $user->firstname)" required autofocus autocomplete="firstname" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('firstname')" />
                    </div>
                    <!-- Last Name -->
                    <div>
                        <x-input-label class="titillium" for="lastname" :value="__('Last Name')" />
                        <x-text-input id="lastname" name="lastname" type="text" class="titillium mt-1 block w-full" :value="old('lastname', $user->lastname)" required autofocus autocomplete="lastname" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('lastname')" />
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="judul-atas titillium align-items-center my-auto"><span>Company Profile</span></p>
                </div>
            </div>
            <div class="userprofil" style="height: 300px;">
                <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                    <!-- Company -->
                    <div>
                        <x-input-label class="titillium" for="company" :value="__('Company')" />
                        <x-text-input id="company" name="company" type="text" class="titillium mt-1 block w-full" :value="old('company', $user->company)" required autofocus autocomplete="company" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('company')" />
                    </div>
                    <!-- Email Company -->
                    <div>
                        <x-input-label for="emailcompany" :value="__('Email Company')" />
                        <x-text-input id="emailcompany" name="emailcompany" type="email" class="titillium mt-1 block w-full" :value="old('emailcompany', $user->emailcompany)" required autocomplete="emailcompany" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('emailcompany')" />

                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="titillium text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}

                                    <button form="send-verification" class="titillium underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="titillium mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                    <!-- Nomor Telepon  -->
                    <div>
                        <x-input-label class="titillium" for="notelp" :value="__('Nomor Telepon')" />
                        <x-text-input id="notelp" name="notelp" type="text" class="titillium mt-1 block w-full" :value="old('notelp', $user->notelp)" required autofocus autocomplete="notelp" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('notelp')" />
                    </div>
                    <!-- NIB -->
                    <div>
                        <x-input-label class="titillium" for="nib" :value="__('NIB')" />
                        <x-text-input id="nib" name="nib" type="text" class="titillium mt-1 block w-full" :value="old('nib', $user->nib)" required autofocus autocomplete="nib" />
                        <x-input-error class="titillium mt-2" :messages="$errors->get('nib')" />
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="flex items-center gap-4">
                    <x-primary-button class="titillium btn p-auto d-flex justify-content-center" style="background-color: #011D83; font-size: 22px; width:129.56px;height:51px;">{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="titillium text-sm text-gray-600 my-auto mx-auto"
                            style="font-size: 25px;"
                        >{{ __('Saved') }}</p>
                    @endif
                </div>
                
                @auth
                    @if (Auth::user()->role_id == 1)
                        <a href="/admin/account" class="titillium btn btn-primary ms-5" style="font-weight: bold; background-color: #011D83; font-size: 22px; padding: 8px 24px;">Confirm Account</a>
                        <a href="/orders" class="titillium btn btn-primary ms-5" style="font-weight: bold; background-color: #011D83; font-size: 22px; padding: 8px 24px;">View All Order</a>
                    @endif
                @endauth
            </div>
        </form>
    </div>

    {{-- ini bagian history --}}
    <div class="profilebox mx-auto my-5">
        <div class="subjudul d-flex">
            <p class="judul-atas titillium mx-auto my-auto text-white">History</p>
        </div>
        <div class="mt-5 mb-3">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="judul-atas titillium align-items-center my-auto"><span>Booking History</span></p>
            </div>
        </div>
        <div class="userprofil">
            <table class="table table-responsive table-striped hover table-bordered">
                <thead>
                    <tr style="border-bottom: 1px solid black;">
                        <th class="titillium" style="width: auto;">ID</th>
                        <th class="titillium" style="width: auto;">Order Date</th>
                        <th class="titillium" style="width: auto;">Shipper</th>
                        <th class="titillium" style="width: auto;">Consignee</th>
                        <th class="titillium" style="width: auto;">Status</th>
                        <th class="titillium" style="width: auto;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="titillium">{{ $order->id }}</td>
                        <td class="titillium">{{ $order->order_date }}</td>
                        <td class="titillium">{{ $order->shipper }}</td>
                        <td class="titillium">{{ $order->consignee }}</td>
                        @if( $order->accept == 1)
                            <td class="titillium">Accepted</td>
                        @else
                            <td class="titillium">Waiting</td>
                        @endif
                        <td class="titillium">
                            <a href="/orders/{{ $order->id }}" class="btn btn-primary" style="text-decoration: none; color: white;">Detail</a>
                            <a href="/orders/approve/{{ $order->id }}" class="btn btn-primary" style="text-decoration: none; color: white;">Approve</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    {{-- ini bagian password  --}}
    <div class="profilebox mx-auto my-5">
        <div class="subjudul d-flex">
            <p class="judul-atas titillium mx-auto my-auto text-white" >Password</p>
        </div>
        <form method="post" action="{{ route('password.update') }}" class="mx-auto">
            @csrf
            @method('put')
            <div class="mt-5 mb-3">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="judul-atas titillium align-items-center my-auto"><span>Update Password</span></p>
                </div>
            </div>
            <div class="userprofil" style="height: 250px;">
                <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                    <div>
                        <x-input-label class="titillium" for="current_password" :value="__('Current Password')" />
                        <x-text-input id="current_password" name="current_password" type="password" class="titillium mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error class="titillium" :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label class="titillium" for="password" :value="__('New Password')" />
                        <x-text-input id="password" name="password" type="password" class="titillium mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="titillium mt-2" />
                    </div>

                    <div>
                        <x-input-label class="titillium" for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="titillium mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="titillium mt-2" />
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
                <!-- <a href="#" class="btn btn-primary" style="background-color: #011D83; font-size: 25px;">Save</a> -->
                <x-primary-button class="titillium btn p-auto d-flex justify-content-center me-5" style="background-color: #011D83; font-size: 22px; width:129.56px;height:51px;">{{ __('Save') }}</x-primary-button>
                    @if (session('status') === 'password-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="titillium text-sm text-gray-600 my-auto ms-3"
                            style="font-size: 25px;"
                        >{{ __('Saved.') }}</p>
                    @endif
            </div>
        </form>
    </div>

    <div class="profilebox mx-auto my-5">
        <div class="subjudul d-flex mb-3">
            <p class="judul-atas titillium mx-auto my-auto text-white">Account</p>
        </div>
        <div class="iniform">
            <header>
                <h2 class="titillium text-lg font-medium text-gray-900">
                    {{ __('Delete Account') }}
                </h2>
    
                <p class="titillium mt-1 text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </header>

            <div class="d-flex mt-3">
                <x-danger-button
                class="titillium"
                x-data=""
                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                >{{ __('Delete Account') }}</x-danger-button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                        class="titillium btn btn-primary ms-5" 
                        style="font-weight: bold; background-color: #011D83; font-size: 22px; padding: 8px 24px;">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="titillium text-lg font-medium text-gray-900">Are you sure your want to delete your account?</h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="titillium sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="titillium mt-1 block w-3/4"
                    placeholder="Password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button class="titillium" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="titillium ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</x-app-layout>
@endsection