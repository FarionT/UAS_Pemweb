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
        margin-left: 35px;
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
        margin-left: 35px;
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

</style>
@endsection

@section('isi')
@auth
    @if(Auth::user()->language == 1)
        <div class="mt-5 mb-10">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('app/assets/image/service.png') }}" style="width:100px;" />
                <p class="align-items-center my-auto" style="font-size: 60px;">SERVICE</p>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Export</span></p>
            </div>
        </div>
        <div class="ekspor d-flex">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (AE)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Export transportation provider services by air</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak" style="margin-left: 62px;">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (OE)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Export transportation provider services by sea</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
            </div>
        </div>
        <div class="impor d-flex">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (AI)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Services of imported transportation providers by air</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak" style="margin-left: 62px;">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (OI)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Import transportation provider services by sea</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
            </div>
        </div>
        <div class="domestic d-flex flex-column">
            <div class="d-flex mb-5">
                <div class="kotak">
                    <div class="judul">
                        <p class="align-items-center my-auto">Inland Truck (IT)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/inland.png') }}" style="width:250px; height:auto; margin-left:20px" />
                        <p class="my-auto text-center">Services of domestic transport providers by land</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak" style="margin-left: 62px;">
                    <div class="judul">
                        <p class="align-items-center my-auto">Project Cargo (PC)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/cargo.png') }}" style="width:250px; height:auto;" />
                        <p class="mx-auto my-auto text-center" style="padding-right: 30px;">Project cargo transportation provider service</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
            <div class="d-flex mt-5 mb-5">
                <div class="kotak">
                    <div class="judul">
                        <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" style="width:250px; height:auto; margin-left:10px" />
                        <p class="my-auto text-center">Export transportation provider services by air</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak" style="margin-left: 62px;">
                    <div class="judul">
                        <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" style="width:250px; height:auto; margin-left:10px" />
                        <p class="my-auto text-center">Export transportation provider services by sea</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
        </div>
    @endif
@endauth

@auth
    @if(Auth::user()->language == 2)
        <div class="mt-5 mb-10">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('app/assets/image/service.png') }}" style="width:100px;" />
                <p class="align-items-center my-auto" style="font-size: 60px;">SERVICE</p>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Export</span></p>
            </div>
        </div>
        <div class="ekspor d-flex">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (AE)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur udara</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak" style="margin-left: 62px;">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (OE)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur laut</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Import</span></p>
            </div>
        </div>
        <div class="impor d-flex">
            <div class="kotak">
                <div class="judul">
                    <p class="align-items-center my-auto">Air Freight (AI)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/pesawat.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Layanan penyedia transportasi impor melalui jalur udara</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
            <div class="kotak" style="margin-left: 62px;">
                <div class="judul">
                    <p class="align-items-center my-auto">Sea Freight (OI)</p>
                </div>
                <div class="isi mt-2 d-flex">
                    <img src="{{ asset('app/assets/image/kapal.png') }}" style="width:250px; height:auto; margin-left:10px" />
                    <p class="my-auto text-center">Layanan penyedia transportasi impor melalui jalur laut</p>
                </div>
                <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                    <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                </div>
            </div>
        </div>
        <div class="mt-10">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="align-items-center my-auto"><span>Domestic</span></p>
            </div>
        </div>
        <div class="domestic d-flex flex-column">
            <div class="d-flex mb-5">
                <div class="kotak">
                    <div class="judul">
                        <p class="align-items-center my-auto">Inland Truck (IT)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/inland.png') }}" style="width:250px; height:auto; margin-left:20px" />
                        <p class="my-auto text-center">Layanan penyedia transportasi domestik melalui jalur darat</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak" style="margin-left: 62px;">
                    <div class="judul">
                        <p class="align-items-center my-auto">Project Cargo (PC)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/cargo.png') }}" style="width:250px; height:auto;" />
                        <p class="mx-auto my-auto text-center" style="padding-right: 30px;">Layanan penyedia transportasi project cargo</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
            <div class="d-flex mt-5 mb-5">
                <div class="kotak">
                    <div class="judul">
                        <p class="align-items-center my-auto">Air Freight (ADOM)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/pesawat.png') }}" style="width:250px; height:auto; margin-left:10px" />
                        <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur udara</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
                <div class="kotak" style="margin-left: 62px;">
                    <div class="judul">
                        <p class="align-items-center my-auto">Sea Freight (ODOM)</p>
                    </div>
                    <div class="isi mt-2 d-flex">
                        <img src="{{ asset('app/assets/image/kapal.png') }}" style="width:250px; height:auto; margin-left:10px" />
                        <p class="my-auto text-center">Layanan penyedia transportasi ekspor melalui jalur laut</p>
                    </div>
                    <div class="tombol mx-auto d-flex justify-content-center rounded-circle " style="background-color:#001560; width: 100px; height:100px;">
                        <a href="/" class="text-center mx-auto" style="text-decoration:none; color: white;">GO</a> 
                    </div>
                </div>
            </div>
        </div>
    @endif
@endauth
@endsection
