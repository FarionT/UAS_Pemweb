@extends('layouts.halaman')
@section('title', 'Service')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

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
        margin-top: 100px;
        margin-bottom: 50px;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }

    .kotak {
        background-color: white;
        border-radius: 20px;
        width: 45%;
        height: 400px;
        /* margin-left: 35px; */
        margin-bottom: 30px;
        padding:0px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;
    }

    .kotak>.judul{
        background-color: #011D83;
        width: 100%;
        height:100px;
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
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        font-size: 50px;
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

    .impor {display: flex; justify-content:space-around;}
    .ekspor {display: flex; justify-content:space-around;}
    .domestic1 {display: flex; justify-content:space-around;}
    .domestic2 {display: flex; justify-content:space-around;}
    
    @media screen and (max-width: 1100px) {
        .image {width: 230px;}
        .isi>p {font-size: 25px;}
        .isi {margin-bottom: 20px;}
    }
    @media screen and (max-width: 1000px) {
        .image {width: 210px;}
        .isi>p {font-size: 22px;}
        .isi {margin-bottom: 40px;}
    }
    @media screen and (max-width: 950px) {
        .impor {display: block;}
        .ekspor {display: block;}
        .domestic1 {display: block;}
        .domestic2 {display: block;}
        .image {width: 250px;}
        .isi>p {font-size: 35px;}
        .isi {margin-bottom: 0px;}
        .kotak, .kotak-kanan{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 100px;
        }
    }
    @media screen and (max-width: 700px) {
        .image {width: 230px;}
        .isi>p {font-size: 30px;}
        .isi {margin-bottom: 20px;}
    }
    @media screen and (max-width: 630px) {
        .image {width: 200px;}
        .isi>p {font-size: 25px;}
        .isi {margin-bottom: 50px;}
    }
    @media screen and (max-width: 500px) {
        .main-judul {
            font-size: 40px;
            font-weight: bold;
        }
        .main-logo {
            width: 80px;
        }
        .judul>p {
            font-size: 40px;
        }
        .image {
            width: 150px;
        }
        .isi>p {
            font-size: 20px;
        }
        .kotak {
            height: 350px;
        }
        .tombol>a {
            margin-top: auto;
            margin-bottom: auto;
            font-size: 28px;
        }
    }
    @media screen and (max-width: 400px) {
        .main-judul {
            font-size: 30px;
            font-weight: bold;
        }
        .main-logo {
            width: 60px;
        }
        .judul>p {
            font-size: 30px;
        }
        .image {
            width: 100px;
        }
        .isi>p {
            font-size: 15px;
        }
        .kotak {
            height: 310px;
        }
        .tombol {
            width: 80px;
            height: 80px;
        }
        .tombol>a {
            font-size: 24px;
        }
    }
</style>
@endsection

@section('isi')
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
    <div class="ekspor">
        <div class="kotak">
            <div class="judul">
                <p class="align-items-center my-auto">Air Freight (AE)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                <p class="my-auto text-center">Export transportation provider services by air</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/AE" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak kotak-kanan">
            <div class="judul">
                <p class="align-items-center my-auto">Sea Freight (OE)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                <p class="my-auto text-center">Export transportation provider services by sea</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/OE" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
        </div>
    </div>
    <div class="impor">
        <div class="kotak">
            <div class="judul">
                <p class="align-items-center my-auto">Air Freight (AI)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                <p class="my-auto text-center">Import transportation provider services by air</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/AI" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak kotak-kanan">
            <div class="judul">
                <p class="align-items-center my-auto">Sea Freight (OI)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                <p class="my-auto text-center">Import transportation provider services by sea</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/OI" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
        </div>
    </div>
    <div class="domestic d-flex flex-column">
        <div class="domestic1 mb-5">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Inland Truck (IT)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/inland.png') }}" class="image" />
                    <p class="my-auto text-center">Services of domestic transport providers by land</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/IT" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak kotak-kanan">
                <div class="judul">
                    <p class="align-items-center my-auto">Project Cargo (PC)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/cargo.png') }}" class="image" />
                    <p class="mx-auto my-auto text-center" style="padding-right: 30px;">Project cargo transportation provider service</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/PC" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="domestic2 mt-5 mb-5">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                    <p class="my-auto text-center">Domestic transportation provider services by air</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/ADOM" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak kotak-kanan">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                    <p class="my-auto text-center">Domestic transportation provider services by sea</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/ODOM" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
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
    <div class="ekspor">
        <div class="kotak">
            <div class="judul">
                <p class="align-items-center my-auto">Air Freight (AE)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur udara</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/AE" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak kotak-kanan">
            <div class="judul">
                <p class="align-items-center my-auto">Sea Freight (OE)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur laut</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/OE" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
        </div>
    </div>
    <div class="impor">
        <div class="kotak">
            <div class="judul">
                <p class="align-items-center my-auto">Air Freight (AI)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur udara</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/AI" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak kotak-kanan">
            <div class="judul">
                <p class="align-items-center my-auto">Sea Freight (OI)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur laut</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/OI" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
        </div>
    </div>
    <div class="domestic d-flex flex-column">
        <div class="domestic1 mb-5">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Inland Truck (IT)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/inland.png') }}" class="image" />
                    <p class="my-auto text-center">Layanan penyedia transportasi domestik melalui jalur darat</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/IT" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak kotak-kanan">
                <div class="judul">
                    <p class="align-items-center my-auto">Project Cargo (PC)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/cargo.png') }}" class="image" />
                    <p class="mx-auto my-auto text-center" style="padding-right: 30px;">Layanan penyedia transportasi project cargo</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/PC" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="domestic2 mt-5 mb-5">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                    <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur udara</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/ADOM" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak kotak-kanan">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                    <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur laut</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/ODOM" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
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
    <div class="ekspor">
        <div class="kotak">
            <div class="judul">
                <p class="align-items-center my-auto">Air Freight (AE)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                <p class="my-auto text-center">Export transportation provider services by air</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/AE" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak kotak-kanan">
            <div class="judul">
                <p class="align-items-center my-auto">Sea Freight (OE)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                <p class="my-auto text-center">Export transportation provider services by sea</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/OE" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
        </div>
    </div>
    <div class="impor">
        <div class="kotak">
            <div class="judul">
                <p class="align-items-center my-auto">Air Freight (AI)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                <p class="my-auto text-center">Import transportation provider services by air</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/AI" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
        <div class="kotak kotak-kanan">
            <div class="judul">
                <p class="align-items-center my-auto">Sea Freight (OI)</p>
            </div>
            <div class="isi mt-2 d-flex">
                <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                <p class="my-auto text-center">Import transportation provider services by sea</p>
            </div>
            <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                <a href="/orders/create/OI" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
            </div>
        </div>
    </div>
    <div class="mt-10">
        <div id="pembatas1" class="d-flex justify-content-center mx-auto">
            <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
        </div>
    </div>
    <div class="domestic d-flex flex-column">
        <div class="domestic1 mb-5">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Inland Truck (IT)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/inland.png') }}" class="image" />
                    <p class="my-auto text-center">Services of domestic transport providers by land</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/IT" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak kotak-kanan">
                <div class="judul">
                    <p class="align-items-center my-auto">Project Cargo (PC)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/cargo.png') }}" class="image" />
                    <p class="mx-auto my-auto text-center" style="padding-right: 30px;">Project cargo transportation provider service</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/PC" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="domestic2 mt-5 mb-5">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" class="image" />
                    <p class="my-auto text-center">Domestic transportation provider services by air</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/ADOM" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak kotak-kanan">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" class="image" />
                    <p class="my-auto text-center">Domestic transportation provider services by sea</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/orders/create/ODOM" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
