@extends('layouts.halaman')
@section('title', 'Warning!')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{background-color: #B0D1FC !important;
        height:50vh;
    }

    .warnbox {
        background-color: white;
        border-radius: 20px;
        width: 45%;
        height: 300px;
        padding:0px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;

    }

    .warnbox>.atas{
        background-color: #dc3545;
        width: 100%;
        height:70px;
        padding:10px;
        display: flex;
        border-radius: 20px 20px 0 0;
    }

    .atas>p {
        width: 100%; 
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        font-size: 30px;
        color: white;
    }

    .isi>p {
        width: auto;
        height: auto; 
        text-align: left; 
        margin: auto 15px 12px; 
        font-family: 'Titillium Web';
        color: #011D83;
        font-size: 25px;
        align-items: center;
    }

    .gambar {
        width:125px; 
        height:auto; 
        margin-top: 30px;
    }

    @media screen and (max-width: 650px) {
        .gambar {
            width: 110px;
        }
        .isi>p {
            font-size: 20px;
        }
    }

    @media screen and (max-width: 650px) {
        .gambar {
            width: 100px;
        }
        .isi>p {
            font-size: 15px;
        }
    }
</style>
@endsection

@section('isi')
    <div class="d-flex justify-content-center my-auto">
        <div class="warnbox align-self-center my-5 ">
            <div class="atas">
                <p class="my-auto justify-content-center d-flex">Warning!</p>
            </div>
            <div class="isi ms-3 my-auto d-flex">
                <img src="{{ asset('app/assets/image/warning.png') }}" class="gambar" />
                <p class="my-auto">Maaf order sudah di approve.</p>
            </div>
            <div class="justify-content-center d-flex mt-3">
                <a href="/service" class="button text-center mx-auto btn btn-danger">Back to Previous Page</a>
            </div>
        </div>
    </div>
@endsection