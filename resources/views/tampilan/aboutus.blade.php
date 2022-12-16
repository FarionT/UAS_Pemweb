@extends('layouts.halaman')
@section('style')
    <style>
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

        #company p{
            font-size: 25px;
        }

        #tulisanService:before, #tulisanService:after{
            content:"";
            flex:1 1;
            border-bottom:2px solid #000;
            margin:auto;
        }
    </style>
@endsection
@section('isi')
@auth
    @if(Auth::user()->language == 'en')
@endauth
        <div class="container">
            <div id="judul" class="d-flex justify-content-center">
                <img src="{{  asset('app/assets/image/image 8.png') }}"/>
                <p id="tulisanJudul">ABOUT US</p>
            </div>
            <div id="company" class="mt-5 bg-white p-5 rounded-5 shadow shadow-top-0">
                <div id="upperCompany" class="d-flex flex-row my-5">
                    <p>PT. JAYAMAS ABADI started operating in 1999.
                    The business started from scratch as a transporter serving in the city,
                    and then began to grow by serving JABODETABEK in 2002
                    The great response from our customers made us more confident to
                    be able to add units and be able to provide domestic outbound
                    transportation services. Currently we have served transportation
                    outside Java, namely Sumatra, Kalimantan, as well as several
                    destinations in Eastern Indonesia.
                    </p>
                    <img src="gambar/image 8.png" alt="image"/>
                </div>
                <p>Currently, PT. JAYAMAS ABADI developed by opening a new business
                    in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                    ABADI. With the support of a solid team and the application of the
                    right technology in managing the business entrusted to us, we are
                    confident that we will be able to provide service satisfaction to our
                    customers and realize the CORPORATE MISSION and VISION
                    appropriately.
                </p>
            </div>
            <p id="tulisanService">SERVICES</p>
        </div>
    @endif

@auth
    @if(Auth::user()->language == 'id')   
@endauth
        <div class="container">
            <div id="judul" class="d-flex justify-content-center">
                <img src="{{  asset('app/assets/image/image 8.png') }}"/>
                <p id="tulisanJudul">ABOUT US</p>
            </div>
            <div id="company" class="mt-5 bg-white p-5 rounded-5 shadow shadow-top-0">
                <div id="upperCompany" class="d-flex flex-row my-5">
                    <p>PT. JAYAMAS ABADI started operating in 1999.
                    The business started from scratch as a transporter serving in the city,
                    and then began to grow by serving JABODETABEK in 2002
                    The great response from our customers made us more confident to
                    be able to add units and be able to provide domestic outbound
                    transportation services. Currently we have served transportation
                    outside Java, namely Sumatra, Kalimantan, as well as several
                    destinations in Eastern Indonesia.
                    </p>
                    <img src="gambar/image 8.png" alt="image"/>
                </div>
                <p>Currently, PT. JAYAMAS ABADI developed by opening a new business
                    in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                    ABADI. With the support of a solid team and the application of the
                    right technology in managing the business entrusted to us, we are
                    confident that we will be able to provide service satisfaction to our
                    customers and realize the CORPORATE MISSION and VISION
                    appropriately.
                </p>
            </div>
            <p id="tulisanService">SERVICES</p>
        </div>
    @endif
@endsection