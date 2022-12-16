@extends('layouts.halaman')
@section('title', 'Visi & Misi')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{background-color: #B0D1FC !important}

    .title {
        padding: 10px;
        display: flex;
        justify-content: center;
        margin-top: 60px;
        margin-bottom: 60px;
    }
    .title h1 {
        display: flex;
        align-items: center;
    }
    .title img {
        height: 200px;
    }
    .main {
        margin-top: 10px;
        padding: 10px;
        display: grid;
        grid-template-columns: auto auto;
        gap: 30px;
        justify-content: center;
    }
    .card{
        border-radius: 18px;
        background-color: white;
        text-align: center;
        padding: 20px;
        box-shadow: 8px 8px 0px #190085;
    }
    .card h1 {
        font-size: 1.625rem;
    }
    .card p {
        width: 254px;
    }
    @media screen and (max-width: 700px) {
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card {
            width: 296px;
            height: 241px;
        }
    }
</style>
@endsection

@section('isi')
@auth
    @if(Auth::user()->language == 'en')
@endauth
        <div class="title">
            <img src="{{ asset('app/assets/image/visi misi.png') }}" style="width: 100px; height: auto; margin-right: 20px;"/>
            <h1><b>VISION & MISSION</b></h1>
        </div>
        <div class="main">
            <div class="card">
                <h1><b>VISION</b></h1>
                <p>To be a reliable, professional and Trusted Expedition Service Company.</p>
            </div>
            <div class="card">
                <h1><b>MISSION</b></h1>
                <p>To provide reliable expedition services that will implement a work culture based on professionalism and integrity. It will play an active role in the distribution of goods throughout the world.</p>
            </div>
        </div>
    @endif
@auth
    @if (Auth::user()->language == 'id')
@endauth
        <div class="title">
            <img src="{{ asset('app/assets/image/visi misi.png') }}" style="width: 100px; height: auto; margin-right: 20px;"/>
            <h1><b>VISI & MISI</b></h1>
        </div>
        <div class="main">
            <div class="card">
                <h1><b>VISI</b></h1>
                <p>Menjadi Perusahaan Jasa Ekspedisi yang handal, profesional dan Terpercaya.</p>
            </div>
            <div class="card">
                <h1><b>MISI</b></h1>
                <p>Menyediakan jasa ekspedisi terpercaya yang menerapkan budaya kerja berlandaskan profesionalisme dan integritas. Ini akan memainkan peran aktif dalam distribusi barang di seluruh dunia.</p>
            </div>
        </div>
    @endif
@endsection