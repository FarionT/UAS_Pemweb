@extends('layouts.halaman')
@section('title', 'Service')

@section('style')
<style>

    body{background-color: #B0D1FC !important}

    #pembatas1 p {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid #000; 
        line-height: 0.1em;
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        color: #001560;
        font-size: 30px;
    } 

    #pembatas span { 
        background:#fff; 
        padding:0 10px; 
    }

    #pembatas1 {
        background-color: white;
        border-radius: 20px;
        width: 95%;
        height:50px;
        /* margin-left: 35px; */
        margin-top: 50px;
        margin-bottom: 50px;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }

    .kotak {
        background-color: white;
        border-radius: 20px;
        /* margin-left: 35px; */
        padding:0px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;
    }

    .kotak>.judul{
        background-color: #011D83;
        width: 100%;
        padding:10px;
        display: flex;
        border-radius: 20px 20px 0 0;
    }

    .main-judul {
        font-size: 60px;
    }

    .main-logo {
        width: 100px;
    }

    .judul>p {
        width: 100%; 
        text-align: center; 
        font-family: 'Titillium Web';
        color: white;
    }

    .isi>p {
        width: 100%; 
        text-align: center; 
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        color: #011D83;
        font-size: 28px;
    }

    .tombol>a {
        width: 100%; 
        text-align: center; 
        margin: 30px 0 0; 
        font-family: 'Titillium Web';
        color: white;
        font-size: 28px;
    }
    
    .image {
        width: 250px;
        margin-left: 10px;
    }
    @media screen and (max-width: 400px) {
        .image {
            width: 180px;
            height:auto;
        }
        .judul>p{
            font-size: 24px;
        }
        .isi{
            margin-bottom: 10px;
        }
        .isi>p {font-size: 16px;}

        .kotak-luar{
            width:90%;
        }
        .tombol{
            width:52px;
            height:52px;
            margin-top: -25px;
        }
        .tombol>a{
            font-size: 16px;
        }
        .main-judul{
            font-size: 36px;
        }
        .main-logo{
            width:53px;
            height:53px;
        }
    }
    @media screen and (min-width: 401px) {
        .image {
            width: 180px;
            height:auto;
        }
        .judul>p{
            font-size: 28px;
        }
        .isi{
            margin-bottom: 10px;
        }
        .isi>p {font-size: 18px;}

        .kotak-luar{
            width:90%;
        }
        .tombol{
            width:54px;
            height:54px;
            margin-top: -25px;
        }
        .tombol>a{
            font-size: 18px;
        }
        .main-judul{
            font-size: 40px;
        }
        .main-logo{
            width:56px;
            height:56px;
        }
    }
    @media screen and (min-width: 500px) {
        .image {
            width: 180px;
            height:auto;
        }
        .judul>p{
            font-size: 28px;
        }
        .isi{
            margin-bottom: 10px;
        }
        .isi>p {font-size: 18px;}

        .kotak-luar{
            width:90%;
        }
        .tombol{
            width:54px;
            height:54px;
            margin-top: -25px;
        }
        .tombol>a{
            font-size: 18px;
        }
        .main-judul{
            font-size: 44px;
        }
        .main-logo{
            width:60px;
            height:60px;
        }
    }
    @media screen and (min-width: 630px) {
        .image {
            width: 180px;
            height:auto;
        }
        .judul>p{
            font-size: 30px;
        }
        .isi{
            margin-bottom: 10px;
        }
        .isi>p {font-size: 18px;}

        .kotak-luar{
            width:90%;
        }
        .tombol{
            width:58px;
            height:58px;
            margin-top: -28px;
        }
        .tombol>a{
            font-size: 20px;
        }
        .main-judul{
            font-size: 52px;
        }
        .main-logo{
            width:70px;
            height:70px;
        }
    }
    @media screen and (min-width: 767px) {
        .image {
            width: 180px;
            height:auto;
        }
        .judul>p{
            font-size: 35px;
        }
        .isi{
            margin-bottom: 10px;
        }
        .isi>p {font-size: 18px;}

        .kotak-luar{
            width:47%;
        }
        .tombol{
            width:62px;
            height:62px;
            margin-top: -33px;
        }
        .tombol>a{
            font-size: 20   px;
        }
        .main-judul{
            font-size: 50px;
        }
        .main-logo{
            width:80px;
            height:auto;
        }
    }
    @media screen and (min-width: 950px) {
        .image {
            width: 200px;
            height:auto;
        }
        .judul>p{
            font-size: 35px;
        }
        .isi{
            margin-bottom: 10px;
        }
        .isi>p {font-size: 20px;}

        .kotak-luar{
            width:47%;
        }
        .tombol{
            width:65px;
            height:65px;
            margin-top: -33px;
        }
        .tombol>a{
            font-size: 22px;
        }
        .main-judul{
            font-size: 58px;
        }
        .main-logo{
            width:95px;
            height:auto;
        }
    }
    @media screen and (min-width: 1000px) {
        .image {
            width: 230px;
            height:auto;
        }
        .judul>p{
            font-size: 40px;
        }
        .isi>p {font-size: 25px;}

        .kotak-luar{
            width:47%;
        }
        .tombol{
            width:85px;
            height:85px;
            margin-top: -40px;
        }
        .tombol>a{
            font-size: 25px;
        }
        .main-judul{
            font-size: 60px;
        }
        .main-logo{
            width:100px;
            height:auto;
        }
    }
</style>
@endsection

@section('isi')
<div class="container">
@auth
    @if (Auth::user()->language == 1)
        <div class="mt-5 mb-10">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('app/assets/image/service.png') }}" class="main-logo me-3"/>
                <p class="main-judul align-items-center my-auto">SERVICE</p>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center mx-auto">
                <p id="pembatas" class="align-items-center my-auto"><span>Export</span></p>
            </div>
        </div>
        <div class="ekspor d-flex justify-content-md-between flex-md-row flex-column">
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Air Freight (AE)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Export transportation provider services by air</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/AE" class="text-center mx-auto my-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Sea Freight (OE)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Export transportation provider services by sea</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/OE" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center mx-auto">
                <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
            </div>
        </div>
        <div class="impor d-flex justify-content-md-between flex-md-row flex-column">
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Air Freight (AI)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Import transportation provider services by air</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/AI" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Sea Freight (OI)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Import transportation provider services by sea</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="//orders/create/OI" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center mx-auto">
                <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
            </div>
        </div>
        <div class="domestic d-flex justify-content-md-between flex-column">
            <div class="d-flex justify-content-md-between flex-md-row flex-column">
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Inland Truck (IT)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/inland.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Services of domestic transport providers by land</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/IT" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Project Cargo (PC)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/cargo.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Project cargo transportation provider service</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/PC" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-md-between flex-md-row flex-column">
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Domestic transportation provider services by air</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/ADOM" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Domestic transportation provider services by sea</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/ODOM" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
        </div>
    @elseif (Auth::user()->language == 2)
        <div class="mt-5 mb-10">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('app/assets/image/service.png') }}" class="main-logo me-3"/>
                <p class="main-judul align-items-center my-auto">LAYANAN</p>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center mx-auto">
                <p id="pembatas" class="align-items-center my-auto"><span>Export</span></p>
            </div>
        </div>
        <div class="ekspor d-flex justify-content-md-between flex-md-row flex-column">
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Air Freight (AE)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Mengekspor layanan penyedia transportasi melalui udara.</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/AE" class="text-center mx-auto my-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Sea Freight (OE)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Ekspor jasa penyedia transportasi melalui laut.</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/OE" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center mx-auto">
                <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
            </div>
        </div>
        <div class="impor d-flex justify-content-md-between flex-md-row flex-column">
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Air Freight (AI)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Impor jasa penyedia transportasi melalui udara.</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/AI" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Sea Freight (OI)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Impor jasa penyedia transportasi melalui laut.</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="//orders/create/OI" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center mx-auto">
                <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
            </div>
        </div>
        <div class="domestic d-flex justify-content-md-between flex-column">
            <div class="d-flex justify-content-md-between flex-md-row flex-column">
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Inland Truck (IT)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/inland.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Layanan penyedia transportasi domestik melalui darat.</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/IT" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Project Cargo (PC)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/cargo.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Layanan penyedia transportasi kargo proyek.</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/PC" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-md-between flex-md-row flex-column">
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Layanan penyedia transportasi domestik melalui udara.</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/ADOM" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak-luar mx-auto my-2"> 
                    <div class="kotak bg-white w-100 pb-3">
                        <div class="judul" >
                            <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                        </div>
                        <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                            <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                            <p class="my-auto text-center">Layanan penyedia transportasi domestik melalui laut.</p>
                        </div>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                        <a href="/orders/create/ODOM" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
        </div>
    @endauth
    @else
    <div class="mt-5 mb-10">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('app/assets/image/service.png') }}" class="main-logo me-3"/>
            <p class="main-judul align-items-center my-auto">SERVICE</p>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Export</span></p>
        </div>
    </div>
    <div class="ekspor d-flex justify-content-md-between flex-md-row flex-column">
        <div class="kotak-luar mx-auto my-2"> 
            <div class="kotak bg-white w-100 pb-3">
                <div class="judul" >
                    <p class="align-items-center my-auto">Air Freight (AE)</p>
                </div>
                <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                    <p class="my-auto text-center">Export transportation provider services by air</p>
                </div>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                <a href="/orders/create/AE" class="text-center mx-auto my-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak-luar mx-auto my-2"> 
            <div class="kotak bg-white w-100 pb-3">
                <div class="judul" >
                    <p class="align-items-center my-auto">Sea Freight (OE)</p>
                </div>
                <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                    <p class="my-auto text-center">Export transportation provider services by sea</p>
                </div>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                <a href="/orders/create/OE" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
        </div>
    </div>
    <div class="impor d-flex justify-content-md-between flex-md-row flex-column">
        <div class="kotak-luar mx-auto my-2"> 
            <div class="kotak bg-white w-100 pb-3">
                <div class="judul" >
                    <p class="align-items-center my-auto">Air Freight (AI)</p>
                </div>
                <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                    <p class="my-auto text-center">Import transportation provider services by air</p>
                </div>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                <a href="/orders/create/AI" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak-luar mx-auto my-2"> 
            <div class="kotak bg-white w-100 pb-3">
                <div class="judul" >
                    <p class="align-items-center my-auto">Sea Freight (OI)</p>
                </div>
                <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                    <p class="my-auto text-center">Import transportation provider services by sea</p>
                </div>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                <a href="//orders/create/OI" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
        </div>
    </div>
    <div class="domestic d-flex justify-content-md-between flex-column">
        <div class="d-flex justify-content-md-between flex-md-row flex-column">
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Inland Truck (IT)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/inland.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Services of domestic transport providers by land</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/IT" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Project Cargo (PC)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/cargo.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Project cargo transportation provider service</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/PC" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-md-between flex-md-row flex-column">
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Domestic transportation provider services by air</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/ADOM" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak-luar mx-auto my-2"> 
                <div class="kotak bg-white w-100 pb-3">
                    <div class="judul" >
                        <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                    </div>
                    <div class="isi mt-2 d-flex flex-column flex-lg-row p-2">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" class="image mx-auto" />
                        <p class="my-auto text-center">Domestic transportation provider services by sea</p>
                    </div>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560">
                    <a href="/orders/create/ODOM" class="text-center mx-auto my-auto align-items-center" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
