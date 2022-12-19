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

    .btn-delete:hover{
        background-color: #0B5ED7;
    }

    .box-input>input {
        width: 100%;
        border: 0px;
        box-shadow: 0 0 0.125rem .25rem rgba(0,0,0,.075);
        margin-bottom: 16px;
    }

    /* MODAL */


    /* The Modal (background) */
    .confirm-user-deletion {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .all-button{
        border-radius: 10px;
        font-weight: bold;
    }
    .button-tabel-marginkanan {
        margin-right: 16px;
    }

    /* MODAL */

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
    
    .tindakan {
        display: flex;
    }

    .delete-button {
        border-radius: 20px;
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
        .all-button{
            font-size: 10px;
            padding:5px;
            width:60px;
        }
        .button-tabel-marginkanan {
            margin-right: 8px;
        }
        .ini-foto{
            width:39px;
            height:39px;
        }
        .ini-profil{
            width:180px;
            height:auto;
        }
        .label-atas{
            font-size: 14px;
        }
        .ini-input{
            font-size: 12px;
        }
        .delete-head{
            font-size: 20px;
        }
        .delete-isi{
            font-size:12px; 
        }
    }
    @media screen and (min-width: 550px) {
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
        .all-button{
            font-size: 10px;
            padding:5px;
            width:60px;
        }
        .button-tabel-marginkanan {
            margin-right: 8px;
        }
        .ini-foto{
            width:39px;
            height:39px;
        }
        .ini-profil{
            width:180px;
            height:auto;
        }
        .label-atas{
            font-size: 14px;
        }
        .ini-input{
            font-size: 12px;
        }
        .delete-head{
            font-size: 20px;
        }
        .delete-isi{
            font-size:12px; 
        }
    }
    @media screen and (max-width:540px) {
        .missing1 {
            display: none;
        }
    }
    @media screen and (max-width: 450px) {
        .tindakan {
            flex-direction: column;
        }
        .all-button {
            margin-bottom: 5px;
        }
    }
    @media screen and (max-width: 400px) {
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
        .all-button{
            font-size: 8px;
            padding:3px;
            width:40px;
        }
        .button-tabel-marginkanan {
            margin-right: 8px;
        }
        .ini-foto{
            width:39px;
            height:39px;
        }
        .ini-profil{
            width:160px;
            height:auto;
        }
        .label-atas{
            font-size: 14px;
        }
        .ini-input{
            font-size: 12px;
        }
        .delete-head{
            font-size: 20px;
        }
        .delete-isi{
            font-size:12px; 
        }
    }
    @media screen and (max-width: 350px) {
        .judul-atas {
            font-size: 16px;
        }
        .subjudul{
            margin-top: -70px;
            height:35px;
            width:45%;
        }
        #pembatas1{
            height:35px;
        }
        .all-button{
            font-size: 8px;
            padding:3px;
            width:40px;
        }
        .button-tabel-marginkanan {
            margin-right: 8px;
        }
        .ini-foto{
            width:39px;
            height:39px;
        }
        .ini-profil{
            width:140px;
            height:auto;
        }
        .label-atas{
            font-size: 14px;
        }
        .ini-input{
            font-size: 12px;
        }
        .delete-head{
            font-size: 20px;
        }
        .delete-isi{
            font-size:12px; 
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
        .all-button{
            font-size: 10px;
            padding:5px;
            width:60px;
        }
        .button-tabel-marginkanan {
            margin-right: 8px;
        }
        .ini-foto{
            width:39px;
            height:39px;
        }
        .ini-profil{
            width:180px;
            height:auto;
        }
        .label-atas{
            font-size: 14px;
        }
        .label-tabel-atas, .label-tabel-bawah {
            font-size: 10px;
        }
        .ini-input{
            font-size: 12px;
        }
        .delete-head{
            font-size: 20px;
        }
        .delete-isi{
            font-size:12px; 
        }
    }
    @media screen and (max-width:700px) {
        .missing {
            display: none;
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
        .all-button{
            font-size: 13px;
            padding:7px;
            width:75px;
        }
        .ini-foto{
            width:39px;
            height:39px;
        }
        .ini-profil{
            width:180px;
            height:auto;
        }
        .label-atas{
            font-size: 15px;
        }
        .label-tabel-atas, .label-tabel-bawah {
            font-size: 12px;
        }
        .ini-input{
            font-size: 13px;
        }
        .delete-head{
            font-size: 22px;
        }
        .delete-isi{
            font-size:13px; 
        }
    }
    @media screen and (min-width:900px) {
        .all-button {
            width: 100px;
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
        .all-button{
            font-size: 15px;
            padding:10px;
            width:120px;
        }
        .ini-foto{
            width:43px;
            height:43px;
        }
        .ini-profil{
            width:225px;
            height:auto;
        }
        .label-atas{
            font-size: 16px;
        }
        .ini-input{
            font-size: 14px;
        }
        .delete-head{
            font-size: 28px;
        }
        .delete-isi{
            font-size:14px; 
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
        .all-button{
            font-size: 18px;
            padding:10px;
            width:180px;
        }
        .ini-foto{
            width:47px;
            height:47px;
        }
        .ini-profil{
            width:250px;
            height:auto;
        }
        .label-atas{
            font-size: 18px;
        }
        .ini-input{
            font-size: 16px;
        }
        .delete-head{
            font-size: 32px;
        }
        .delete-isi{
            font-size:16px; 
        }
    }
</style>
@endsection

@section('isi')
    
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
                    <img class="m-3 ini-profil" src="{{ asset('app/'.$user->photo) }}" style="border:1px solid gray;border-radius:15px;"/>
                    
                    <div class="image-upload">
                        <label for="photo" >
                            <img src="{{ asset('app/assets/image/edit.png') }}" class="rounded-circle ini-foto" style="border: 2px solid #011D83; cursor: pointer; background-color: black;"/>
                        </label>

                        <input id="photo" name="photo" type="file" class="mt-1 block w-full" value="{{ old('photo') ?? $user->photo }}" autofocus autocomplete="photo" style="display: none;" />
                    </div>

                    <!-- <a href="/" class="tombol d-flex justify-content-center rounded-circle mx-auto " style="background-color:#001560; border:3px solid #001560;  margin-top: -45px; "><img src="{{ asset('app/assets/image/edit.png') }}" style="width:47px; height:47px;"/></a> -->
                </div>
                <div class="biodataSingkat col col-lg-8 col-12 my-auto mx-auto form-group col-lg-8">
                    <!-- Username -->
                    <div class="box-input">
                        <label class="label-atas">Username</label>
                        <input id="username" name="username" type="text" class="w-100 ini-input titillium mt-1 block" value="{{ old('username') ?? $user->username }}" required autofocus autocomplete="username" />
                    </div>
                    <!-- Email -->
                    <div class="box-input">
                        <label class="label-atas">Email</label>
                        <input id="email" name="email" type="email" class="w-100 ini-input titillium mt-1 block w-full" value="{{ old('email') ?? $user->email }}" required autocomplete="email" />

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
                    <div class="box-input">
                        <label class="label-atas">NPWP</label>
                        <input id="npwp" name="npwp" type="text" class="ini-input titillium mt-1 block w-full" value="{{ old('npwp') ?? $user->npwp }}" required autofocus autocomplete="npwp" />
                    </div>
                </div>
            </div>
            {{-- ini user dan company profile --}}
            <div class="mt-5 mb-4">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="judul-atas w-100 tulisan-garis titillium align-items-center my-auto"><span>User Profile</span></p>
                </div>
            </div>
            <div class="userprofil pb-2 mt-0 w-100">
                <div class="biodataSingkat py-2 py-lg-4 px-auto form-group form-control-lg">
                    <!-- First Name -->
                    <div class="box-input">
                        <label class="label-atas">First Name</label>
                        <input id="firstname" name="firstname" type="text" class="ini-input titillium mt-1 block w-full" value="{{ old('firstname') ?? $user->firstname }}" required autofocus autocomplete="firstname" />
                    </div>
                    <!-- Last Name -->
                    <div class="box-input">
                        <label class="label-atas">Last Name</label>
                        <input id="lastname" name="lastname" type="text" class="ini-input titillium mt-1 block w-full" value="{{ old('lastname') ?? $user->lastname }}" required autofocus autocomplete="lastname" />
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="judul-atas titillium align-items-center my-auto"><span>Company Profile</span></p>
                </div>
            </div>
            <div class="userprofil my-4" style="height: 360px;">
                <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                    <!-- Company -->
                    <div class="box-input">
                        <label class="label-atas">Company</label>
                        <input id="company" name="company" type="text" class="ini-input titillium mt-1 block w-full" value="{{ old('company') ?? $user->company }}" required autofocus autocomplete="company" />
                    </div>
                    <!-- Email Company -->
                    <div class="box-input">
                        <label class="label-atas">Email Company</label>
                        <input id="emailcompany" name="emailcompany" type="email" class="ini-input titillium mt-1 block w-full" value="{{ old('emailcompany') ?? $user->emailcompany }}" required autocomplete="emailcompany" />

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
                    <div class="box-input">
                        <label class="label-atas">Nomor Telepon</label>
                        <input id="notelp" name="notelp" type="text" class="ini-input titillium mt-1 block w-full" value="{{ old('notelp') ?? $user->notelp }}" required autofocus autocomplete="notelp" />
                    </div>
                    <!-- NIB -->
                    <div class="box-input">
                        <label class="label-atas">NIB</label>
                        <input id="nib" name="nib" type="text" class="ini-input titillium mt-1 block w-full" value="{{ old('nib') ?? $user->nib }}" required autofocus autocomplete="nib" />
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center flex-column">
                <div class="d-flex justify-content-center my-2 mx-auto">
                    <x-primary-button class="titillium delete-button p-auto d-flex justify-content-center" style="background-color: #011D83;">{{ __('SAVE') }}</x-primary-button>

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
                    <div class="d-flex justify-content-center flex-sm-row flex-column">
                        <a href="/admin/account" class=" mx-sm-2 mx-auto my-2 d-flex justify-content-center titillium all-button text-decoration-none text-white align-items-center" style="background-color: #011D83; ">CONFIRM ACCOUNT</a>
                        <a href="/orders" class="mx-sm-2 mx-auto d-flex my-2 justify-content-center titillium all-button text-decoration-none  text-white align-items-center" style=" background-color: #011D83;">VIEW ALL ORDER</a>
                    </div>
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
                        <th class="label-atas label-tabel-atas titillium" style="width: auto;">ID</th>
                        <th class="label-atas label-tabel-atas titillium missing1" style="width: auto;">Order Date</th>
                        <th class="label-atas label-tabel-atas titillium missing" style="width: auto;">Shipper</th>
                        <th class="label-atas label-tabel-atas titillium missing" style="width: auto;">Consignee</th>
                        <th class="label-atas label-tabel-atas titillium" style="width: auto;">Status</th>
                        <th class="label-atas label-tabel-atas titillium" style="width: auto;">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="ini-input label-tabel-bawah titillium">{{ $order->id }}</td>
                        <td class="ini-input label-tabel-bawah titillium missing1">{{ $order->order_date }}</td>
                        <td class="ini-input label-tabel-bawah titillium missing">{{ $order->shipper }}</td>
                        <td class="ini-input label-tabel-bawah titillium missing">{{ $order->consignee }}</td>
                        @if( $order->accept == 1)
                            <td class="ini-input label-tabel-bawah titillium">Accepted</td>
                        @else
                            <td class="ini-input label-tabel-bawah titillium">Waiting</td>
                        @endif
                        <td class="tindakan titillium">
                            <a href="/orders/{{ $order->id }}" class="btn all-button btn-primary button-tabel-marginkanan" style="text-decoration: none; color: white;">Detail</a>
                            <a href="/orders/{{$order->id}}/edit" class="btn all-button btn-primary button-tabel-marginkanan" style="text-decoration: none; color: white;">Edit</a>
                            <form action="/orders/{{$order->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-primary all-button btn-delete" style="background-color: #0D6EFD;" type="submit">Cancel</button>
                            </form>
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
            <div class="userprofil" style="height: 280px;">
                <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                    <div class="box-input">
                        <x-input-label class="label-atas titillium" for="current_password" value="Current Password" />
                        <input id="current_password" name="current_password" type="password" class="ini-input titillium mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error class="titillium" :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div class="box-input">
                        <x-input-label class="label-atas titillium" for="password" value="New Password" />
                        <input id="password" name="password" type="password" class="ini-input titillium mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="titillium mt-2" />
                    </div>

                    <div class="box-input">
                        <x-input-label class="label-atas titillium" for="password_confirmation" value="Confirm Password" />
                        <input id="password_confirmation" name="password_confirmation" type="password" class="ini-input titillium mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="titillium mt-2" />
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
                <!-- <a href="#" class="btn btn-primary" style="background-color: #011D83; font-size: 25px;">Save</a> -->
                <x-primary-button class="titillium delete-button p-auto d-flex justify-content-center " style="background-color: #011D83;">{{ __('Save') }}</x-primary-button>
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
                <h2 class="delete-head titillium text-lg font-medium text-gray-900">
                    {{ __('Delete Account') }}
                </h2>
    
                <p class="delete-isi titillium mt-1 text-sm text-gray-600">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </header>

            <div class="d-flex flex-sm-row flex-column mt-3 flex-sm-start">
                <button
                id="btn"
                class="btn btn-danger titillium delete-button my-2 mx-auto mx-sm-0"
                style="font-weight:bold"
                >{{ __('Delete Account') }}</button>
                <form method="POST" action="{{ route('logout') }}" class="mx-auto mx-sm-0">
                    @csrf
                    <a href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();"
                        class="titillium btn delete-button text-white mx-sm-3 mx-auto my-2" 
                        style="font-weight: bold; background-color: #011D83;">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>

    <div id="confirm-user-deletion" class="confirm-user-deletion" name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="modal-content p-6">
            @csrf
            @method('delete')

            <h2 class="titillium text-lg font-medium text-gray-900">Are you sure your want to delete your account?</h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="Password" class="titillium sr-only" />

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="titillium mt-1 block w-3/4"
                    placeholder="Password"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button class="close titillium" x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="titillium ml-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("confirm-user-deletion");

        // Get the button that opens the modal
        var btn = document.getElementById("btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
@endsection