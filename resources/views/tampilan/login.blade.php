@extends('layouts.halaman')
@section('title', 'Login')

@section('style')
    <style>
        p{font-family: 'Titillium Web', sans-serif;}

        body{
            background-color: #B0D1FC !important;
        }

        #judul>p{
            font-size: 60px;
            font-weight: bold;
        }

        #judul>img{
            width:268px;
            height:auto;
        }

        .kotak {
        background-color: white;
        border-radius: 20px;
        width: 45%;
        height: 400px;
        margin-left: 35px;
        margin-bottom: 30px;
        padding:0px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;
        }

        .kotak-kanan {
        margin-left: 62px;
        }

    </style>
@section('content')
<div class="mt-5 mb-10">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('app/assets/image/service.png') }}" style="width:100px;" />
        <p class="align-items-center my-auto" style="font-size: 60px;">LOGIN</p>
    </div>
</div>

<div class ="kotak kotak-kanan">
    <form>
        <div class="form-group">
          <label for="Username">Username</label>
          <input type="name" class="form-control" id="Username">
        </div>
        <div class="form-group">
          <label for="Password">Password</label>
          <input type="password" class="form-control" id="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection
