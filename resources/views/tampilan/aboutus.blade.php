@extends('layouts.halaman')
@section('style')
    <style>
        body{
            background-color: #B0D1FC !important;
        }

        #judul>p{
            font-weight: bold;
        }


        p#tulisanService:before, p#tulisanService:after{
            content:"";
            flex:1 1;
            border-bottom:2px solid #000;
            margin:auto;
        }
        .footer-head{
            font-size: 32px;
            font-weight: bold;
        }
        .office-head{
            font-size: 20px;
            font-weight:bold;
        }

        .isi-footer{
            font-size: 16px;
        }

        .tulisanJudul{
            font-size:60px;
            color:#011D83;
            font-weight:bolder;
        }

        .isi-konten{
            font-size: 25px;
        }
        #aboutus{
            width:150px;
            height:auto;
        }
        @media screen and (max-width:767px){
            .footer-head{
                font-size: 24px;
                font-weight: 950;
            }
            .office-head{
                font-size: 16px;
                font-weight:bold;
            }
            .isi-footer{
                font-size: 12px;
            }
            .tulisanJudul{
                font-size:35px;
            }
            .isi-konten{
                font-size: 17px;
            }
            #aboutus{
                width:75px;
                height:auto;
            }
            #tulisanJudul{
                font-size: 35px;
            }
            #tulisan-company{
                margin-top: -30px;
            }
        }

        @media screen and (min-width:767px){
            .footer-head{
                font-size: 28px;
                font-weight: bold;
            }
            .office-head{
                font-size: 18px;
                font-weight:bold;
            }
            .isi-footer{
                font-size: 14px;
            }
            .tulisanJudul{
                font-size:50px;
            }
            .isi-konten{
                font-size: 21px;
            }
            #aboutus{
                width:110px;
                height:auto;
            }
            #tulisanJudul{
                font-size: 45px;
            }
            #tulisan-company{
                margin-top: -40px;
            }
        }

        @media screen and (min-width:1200px){
            .footer-head{
                font-size: 32px;
                font-weight: bold;
            }
            .office-head{
                font-size: 20px;
                font-weight:bold;
            }
            .isi-footer{
                font-size: 16px;
            }

            .tulisanJudul{
                font-size:60px;
            }
            .isi-konten{
                font-size: 25px;
            }
            #aboutus{
                width:150px;
                height:auto;
            }
            #tulisanJudul{
                font-size: 60px;
            }
            #tulisan-company{
                margin-top: -140px;
            }
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
<div class="container">
    <div id="judul" class="d-flex justify-content-center">
        <img id="aboutus"  src="{{ asset('app/assets/image/aboutus.png') }}"/>
        <p id="tulisanJudul" class="text-center my-auto mx-3">ABOUT US</p>
    </div>
    <div id="company" class="mt-5 bg-white p-lg-5 pt-0 pt-lg-5 pb-2 px-4 rounded-5 shadow shadow-top-0">
        <div id="upperCompany" class="d-flex flex-column my-0 my-lg-5">
            <div class="d-flex">
                <p id="tulisan-company"  class="tulisanJudul">COMPANY</p>
            </div>
            <div class="d-flex flex-column flex-lg-row">
                <p class="isi-konten col col-12 col-lg-6" >PT. JAYAMAS ABADI started operating in 1999.
                The business started from scratch as a transporter serving in the city,
                and then began to grow by serving JABODETABEK in 2002
                The great response from our customers made us more confident to
                be able to add units and be able to provide domestic outbound
                transportation services. Currently we have served transportation
                outside Java, namely Sumatra, Kalimantan, as well as several
                destinations in Eastern Indonesia.
                </p>
                <img class="col col-lg-6 col-12" style="height:auto" src="{{  asset('app/assets/image/image 8.png') }}" alt="image"/>
            </div>
        </div>
        <p class="isi-konten">Currently, PT. JAYAMAS ABADI developed by opening a new business
            in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
            ABADI. With the support of a solid team and the application of the
            right technology in managing the business entrusted to us, we are
            confident that we will be able to provide service satisfaction to our
            customers and realize the CORPORATE MISSION and VISION
            appropriately.
        </p>
    </div>
    <p id="tulisanService" class="tulisanJudul my-5" style="color:black !important">SERVICES</p>
    <div class="bg-white rounded-5 p-3 d-flex flex-column my-5">
        <div  class="d-flex ms-4">
            <p style="margin-top:-60px;" class="tulisanJudul">
                PT. JAYAMAS ABADI
            </p>
        </div>
        <div class="mx-5">
            <ol style="list-style:lower-latin">
                <li class="isi-konten">Inland Transport (JABODETABEK, Inter Island) charter and cargo. We provide Trailer, CDE, CDD, FUSO and other transportation services to various destinations in Indonesia.</li>
                <li class="isi-konten">Employee Shuttle Tourism Charter (JABODETABEK)</li>
                <li class="isi-konten">Our Services Export Import by Air PT. Indotrans Jayamas Abadi, which serves Export and Import through trusted airlines to all destinations in the world, both small and large parties.)</li>
            </ol>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
            <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
            <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="bg-white rounded-5 p-3 d-flex flex-column my-5 justify-content-end">
        <div  class="d-flex justify-content-end me-5">
            <p style="margin-top:-60px;" class="tulisanJudul">
                PT. INDOTRANS JAYAMAS ABADI
            </p>
        </div>
        <div class="mx-5">
            <ol>
                <li class="isi-konten">Export Import by Sea</li>
                <ol style="list-style:lower-latin">
                    <li class="isi-konten">FCL --> We provide Export / Import cargo services for Full Container (20 feet / 40 feet / 40'HC / Refeer)</li>
                    <li class="isi-konten">LCL --> We also provide LCL export/Import to or from various destinations.</li>
                </ol>
                <li class="isi-konten">Custom Clearance PT. Indotrans Jayamas Abadi provides custom services both for sea and air as well as for import or export purposes.</li>
                <li class="isi-konten">Project Cargo We can handle Project shipments, such as sending cargo with more specific handling.</li>
                <li class="isi-konten">Domestic Freight. In collaboration with Domestic Shipping and agents in the area, we also provide inter-regional / inter-island shipping services.</li>
            </ol>
        </div>
        <div class="d-flex flex-row justify-content-between">
            <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
            <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
            <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
        </div>
    </div>
    <p id="tulisanService" class="tulisanJudul my-5" style="color:black !important">ADVANTAGES</p>
    <div class="bg-white rounded-5 p-5 my-5 shadow">
        <ol>
            <li class="isi-konten">More than 15 years of experience in the Forwarding and Inland Transport \Trucking industry.</li>
            <li class="isi-konten">A solid and experienced team in their respective fields.</li>
            <li class="isi-konten">Own Fleet Ownership with safety standards including B3 handling.</li>
            <li class="isi-konten">Total Solutions that we provide at affordable prices.</li>
            <li class="isi-konten">Building sustainable relationships with customers with company integrity.</li>
        </ol>
    </div>
</div>
<footer class="">
    <div class="px-5 py-3 w-100 d-flex flex-lg-row flex-column bg-white">
        <div class="col col-12 col-lg-4">
            <p class="footer-head">Contact Us</p>
            <div class="col col-12 d-flex">
                <img class="col col-2 col-lg-2"src="{{ asset('app/assets/image/wa.png') }}" style=""/>
                <div class="col col-9 col-lg-9 mx-2 my-auto">
                    <p class="mb-0 isi-footer">+6221 8899 2212 ( Hunting )</p>
                    <p class="mb-0 isi-footer">+6281 1122 6395</p>
                    <p class="mb-0 isi-footer">+6281 1122 6396</p>
                </div>
            </div>
            <div class="col col-12 d-flex my-4">
                <img class="col col-2 col-lg-2" src="{{ asset('app/assets/image/email.png') }}" style=""/>
                <div class="col col-9 col-lg-9 mx-2 my-auto">
                    <p class="mb-0 isi-footer">cs@jayamasabadi.id</p>
                    <p class="mb-0 isi-footer">Sales@jayamasabadi.id</p>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-4 my-3 my-lg-0">
            <p class="footer-head">Our Office</p>
            <p class="mb-0 office-head">Head Office :</p>
            <p class="isi-footer">Jl. Marunda Makmur No. 1 RT 002 RW 008
                Kebon Kelapa Segara Makmur,
                Taruma Jaya, Bekasi 17211 Indonesia</p>
            <p class="mb-0 office-head">Sales/Operational Office</p>
            <p class="isi-footer">Kirana Commercial Avenue,
                Bella Terra Lifestyle Center Lt. 1 No. 26
                Jl. Boulevard Raya A2 No. 1 Kelapa Gading, Jakarta Utara</p>
            <p class="mb-0 office-head">Cilegon Office</p>
            <p class="isi-footer">
                Jl. Lingkar Selatan KM.5,
                Karangasem, Kec. Cibeber,
                Kota Cilegon, Banten 42426
            </p>
        </div>
        <div class="col col-12 col-lg-4 d-flex justfy-content-center flex-column">
            <p class="text-center footer-head">Member of APTRINDO</p>
            <img src="{{ asset('app/assets/image/aptrindo.png') }}" class="mx-auto"/>
        </div>
    </div>
</footer>
@endsection