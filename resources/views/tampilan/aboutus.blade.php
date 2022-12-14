@extends('layouts.halaman')
@section('title', 'About Us')

@section('style')
    <style>
        body{
            background-color: #B0D1FC !important;
        }

        #judul>p{
            font-weight: bold;
        }
        #pembatas1 p {
            width: 100%; 
            text-align: center; 
            border-bottom: 1px solid #001560; 
            line-height: 0.1em;
            margin: 12px 0 12px; 
            font-family: 'Titillium Web';
            color: #001560;
        } 

        #pembatas span { 
            background:#B0D1FC; 
            padding:0 10px; 
        }

        #pembatas1 {
            width: 100%;
            height:50px;
            padding:10px;
            display: flex;
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

        .tulisanJudul, #tulisan-indotrans{
            color:#011D83;
            font-weight:bolder;
        }

        .isi-konten{
            font-size: 25px;
        }

        @media screen and (max-width:575px){
            #aboutus{
                width:80px;
                height:auto;
            }
            
            .isi-konten{
                font-size: 16px;
            }
            .advantage{
                font-size: 18px;
            }

            .tulisanJudul{
                font-size: 36px;
            }

            #tulisan-company{
                margin-top: -30px;
            }
            #tulisan-jayamas{
                margin-top:-45px;
            }
            #tulisan-indotrans{
                margin-top: -20px;
                font-size: 23px;
            }
            /* footer */
            .footer-head{
                font-size: 20px;
            }

            .isi-footer{
                font-size: 10px;
            }

            .office-head{
                font-size: 12px;
            }

            .gambar-footer{
                width:100px;
                height:auto;
            }

            .gambar-footer-kiri{
                width:40px;
                height:auto;
            }
        }

        @media screen and (min-width:576px){
            #aboutus{
                width:90px;
                height:auto;
            }
            
            .advantage{
                font-size: 20px;
            }
            
            .tulisanJudul{
                font-size: 42px;
            }

            .isi-konten{
                font-size: 18px;
            }
            #tulisan-company{
                margin-top: -30px;
            }

            #tulisan-jayamas{
                margin-top:-50px;
            }
            #tulisan-indotrans{
                margin-top: -25px;
                font-size: 31px;
            }
            /* footer */
            .footer-head{
                font-size: 23px;
            }

            .isi-footer{
                font-size: 11px;
            }

            .office-head{
                font-size: 14px;
            }

            .gambar-footer{
                width:110px;
                height:auto;
            }

            .gambar-footer-kiri{
                width:50px;
                height:auto;
            }
        }

        @media screen and (min-width:767px){
            #aboutus{
                width:105px;
                height:auto;
            }
            
            .advantage{
                font-size: 22px;
            }

            .isi-konten{
                font-size: 20px;
            }

            .tulisanJudul{
                font-size: 48px;
            }

            #tulisan-company{
                margin-top: -40px;
            }

            #tulisan-jayamas{
                margin-top:-50px;
            }
            #tulisan-indotrans{
                margin-top: -35px;
                font-size: 40px;
            }
            /* footer */
            .footer-head{
                font-size: 26px;
            }

            .isi-footer{
                font-size: 12px;
            }

            .office-head{
                font-size: 16px;
            }

            .gambar-footer{
                width:120px;
                height:auto;
            }

            .gambar-footer-kiri{
                width:60px;
                height:auto;
            }
        }

        @media screen and (min-width:992px){
            #aboutus{
                width:125px;
                height:auto;
            }
            
            .advantage{
                font-size: 26px;
            }

            .tulisanJudul{
                font-size: 54px;
            }

            .isi-konten{
                font-size: 22px;
            }
            #tulisan-company{
                margin-top: -140px;
            }
            #tulisan-jayamas{
                margin-top:-60px;
            }
            #tulisan-indotrans{
                margin-top: -55px;
                font-size: 50px;
            }
            /* footer */
            .footer-head{
                font-size: 29px;
            }

            .isi-footer{
                font-size: 14px;
            }

            .office-head{
                font-size: 18px;
            }

            .gambar-footer{
                width:130px;
                height:auto;
            }

            .gambar-footer-kiri{
                width:70px;
                height:auto;
            }
        }

        @media screen and (min-width:1200px){
            #aboutus{
                width:150px;
                height:auto;
            }

            .advantage{
                font-size: 30px;
            }

            .tulisanJudul{
                font-size: 60px;
            }

            .isi-konten{
                font-size: 25px;
            }

            #tulisan-company{
                margin-top: -140px;
            }

            #tulisan-jayamas{
                margin-top:-60px;
            }

            #tulisan-indotrans{
                margin-top: -60px;
                font-size: 60px;
            }
            /* footer */
            .footer-head{
                font-size: 32px;
            }

            .isi-footer{
                font-size: 16px;
            }

            .office-head{
                font-size: 20px;
            }

            .gambar-footer{
                width:140px;
                height:auto;
            }

            .gambar-footer-kiri{
                width:80px;
                height:auto;
            }
        }
    </style>
@endsection

@section('isi')
@auth
    @if (Auth::user()->language == 1)
        <div class="container">
            <div id="judul" class="d-flex justify-content-center">
                <img id="aboutus"  src="{{ asset('app/assets/image/aboutus.png') }}"/>
                <p class="tulisanJudul text-center my-auto mx-3">ABOUT US</p>
            </div>
            <div id="company" class="my-5 bg-white p-lg-5 pt-0 pt-lg-5 pb-2 px-4 rounded-5 shadow shadow-top-0">
                <div id="upperCompany" class="d-flex flex-column my-0 my-lg-5">
                    <div class="d-flex">
                        <p id="tulisan-company"  class="tulisanJudul titillium">COMPANY</p>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <p class="isi-konten col col-12 col-lg-6 kanit" >PT. INDOTRANS JAYAMAS ABADI started operating in 1999.
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
                <p class="isi-konten kanit">Currently, PT. INDOTRANS JAYAMAS ABADI developed by opening a new business
                    in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                    ABADI. With the support of a solid team and the application of the
                    right technology in managing the business entrusted to us, we are
                    confident that we will be able to provide service satisfaction to our
                    customers and realize the CORPORATE MISSION and VISION
                    appropriately.
                </p>
            </div>
            <div class="my-xl-5 my-lg-4 my-md-3 my-sm-2 my-1 py-xl-5 py-lg-4 py-md-3 py-sm-2 py-">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="tulisanJudul align-items-center my-auto titillium"><span>SERVICES</span></p>
                </div>
            </div>
            <div class="bg-white rounded-5 p-3 d-flex flex-column my-5">
                <div  class="d-flex ms-4">
                    <p id="tulisan-jayamas"  class="tulisanJudul titillium">
                        PT. INDOTRANS JAYAMAS ABADI
                    </p>
                </div>
                <div class="mx-5">
                    <ol style="list-style:lower-latin">
                        <li class="isi-konten kanit">Inland Transport (JABODETABEK, Inter Island) charter and cargo. We provide Trailer, CDE, CDD, FUSO and other transportation services to various destinations in Indonesia.</li>
                        <li class="isi-konten kanit">Employee Shuttle Tourism Charter (JABODETABEK)</li>
                        <li class="isi-konten kanit">Our Services Export Import by Air PT. Indotrans Jayamas Abadi, which serves Export and Import through trusted airlines to all destinations in the world, both small and large parties.</li>
                    </ol>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                </div>
            </div>
            <div class="my-5"></div>
            <div class="bg-white rounded-5 p-lg-3 d-flex flex-column my-5 justify-content-end">
                <div  class="d-flex justify-content-lg-end justify-content-center me-lg-5 mx-lg-0 mx-3">
                    <p id="tulisan-indotrans"  class="titillium">
                        PT. INDOTRANS JAYAMAS ABADI
                    </p>
                </div>
                <div class="mx-5">
                    <ol>
                        <li class="isi-konten kanit">Export Import by Sea</li>
                        <ol style="list-style:lower-latin">
                            <li class="isi-konten kanit">FCL --> We provide Export / Import cargo services for Full Container (20 feet / 40 feet / 40'HC / Refeer)</li>
                            <li class="isi-konten kanit">LCL --> We also provide LCL export/Import to or from various destinations.</li>
                        </ol>
                        <li class="isi-konten kanit">Custom Clearance PT. Indotrans Jayamas Abadi provides custom services both for sea and air as well as for import or export purposes.</li>
                        <li class="isi-konten kanit">Project Cargo We can handle Project shipments, such as sending cargo with more specific handling.</li>
                        <li class="isi-konten kanit">Domestic Freight. In collaboration with Domestic Shipping and agents in the area, we also provide inter-regional / inter-island shipping services.</li>
                    </ol>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                </div>
            </div>
            <div class="my-xl-5 my-lg-4 my-md-3 my-sm-2 my-1 py-xl-5 py-lg-4 py-md-3 py-sm-2 py-1">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="tulisanJudul align-items-center my-auto titillium"><span>ADVANTAGES</span></p>
                </div>
            </div>
            <div class="bg-white rounded-5 p-5 my-5 shadow">
                <ol>
                    <li class="titillium advantage">More than 15 years of experience in the Forwarding and Inland Transport \Trucking industry.</li>
                    <li class="titillium advantage">A solid and experienced team in their respective fields.</li>
                    <li class="titillium advantage">Own Fleet Ownership with safety standards including B3 handling.</li>
                    <li class="titillium advantage">Total Solutions that we provide at affordable prices.</li>
                    <li class="titillium advantage">Building sustainable relationships with customers with company integrity.</li>
                </ol>
            </div>
        </div>
    @elseif (Auth::user()->language == 2)
        <div class="container">
            <div id="judul" class="d-flex justify-content-center">
                <img id="aboutus"  src="{{ asset('app/assets/image/aboutus.png') }}"/>
                <p class="tulisanJudul text-center my-auto mx-3">TENTANG KAMI</p>
            </div>
            <div id="company" class="my-5 bg-white p-lg-5 pt-0 pt-lg-5 pb-2 px-4 rounded-5 shadow shadow-top-0">
                <div id="upperCompany" class="d-flex flex-column my-0 my-lg-5">
                    <div class="d-flex">
                        <p id="tulisan-company"  class="tulisanJudul titillium">PERUSAHAAN</p>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <p class="isi-konten col col-12 col-lg-6 kanit" >PT. INDOTRANS JAYAMAS ABADI mulai beroperasi pada tahun 1999.
                        Bisnis ini dimulai dari awal sebagai transporter yang melayani di kota,
                        dan kemudian mulai berkembang dengan melayani JABODETABEK pada tahun 2002
                        Respon yang luar biasa dari pelanggan kami membuat kami lebih percaya diri untuk
                        mampu menambah unit dan mampu menyediakan outbound domestik
                        Transportasi. Saat ini kami telah melayani transportasi
                        di luar Jawa, yaitu Sumatera, Kalimantan, serta beberapa
                        destinasi di Indonesia Timur.
                        </p>
                        <img class="col col-lg-6 col-12" style="height:auto" src="{{  asset('app/assets/image/image 8.png') }}" alt="image"/>
                    </div>
                </div>
                <p class="isi-konten kanit">Saat ini, PT INDOTRANS JAYAMAS ABADI berkembang dengan membuka usaha baru
                    di bidang Forwarder dengan nama PT. INDOTRANS JAYAMAS
                    ABADI. Dengan dukungan tim yang solid dan penerapan
                    teknologi yang tepat dalam mengelola bisnis yang dipercayakan kepada kami, kami
                    yakin bahwa kami akan dapat memberikan kepuasan layanan kepada kami
                    pelanggan dan mewujudkan MISI dan VISI PERUSAHAAN
                    Tepat.
                </p>
            </div>
            <div class="my-xl-5 my-lg-4 my-md-3 my-sm-2 my-1 py-xl-5 py-lg-4 py-md-3 py-sm-2 py-">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="tulisanJudul align-items-center my-auto titillium"><span>Layanan</span></p>
                </div>
            </div>
            <div class="bg-white rounded-5 p-3 d-flex flex-column my-5">
                <div  class="d-flex ms-4">
                    <p id="tulisan-jayamas"  class="tulisanJudul titillium">
                        PT. INDOTRANS JAYAMAS ABADI
                    </p>
                </div>
                <div class="mx-5">
                    <ol style="list-style:lower-latin">
                        <li class="isi-konten kanit">Transportasi Darat (JABODETABEK, Antar Pulau) charter dan kargo. Kami menyediakan Trailer, CDE, CDD, FUSO dan layanan transportasi lainnya ke berbagai tujuan di Indonesia.</li>
                        <li class="isi-konten kanit">Piagam Wisata Antar Jemput Karyawan (JABODETABEK)</li>
                        <li class="isi-konten kanit">Indotrans Jayamas Abadi, yang melayani Ekspor dan Impor melalui maskapai terpercaya ke semua destinasi di dunia, baik partai kecil maupun besar.</li>
                    </ol>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                </div>
            </div>
            <div class="my-5"></div>
            <div class="bg-white rounded-5 p-lg-3 d-flex flex-column my-5 justify-content-end">
                <div  class="d-flex justify-content-lg-end justify-content-center me-lg-5 mx-lg-0 mx-3">
                    <p id="tulisan-indotrans"  class="titillium">
                        PT. INDOTRANS JAYAMAS ABADI
                    </p>
                </div>
                <div class="mx-5">
                    <ol>
                        <li class="isi-konten kanit">Ekspor Impor melalui Laut</li>
                        <ol style="list-style:lower-latin">
                            <li class="isi-konten kanit">FCL --> Kami menyediakan layanan kargo Ekspor / Impor untuk Full Container (20 feet / 40 feet / 40'HC / Refeer).</li>
                            <li class="isi-konten kanit">LCL --> Kami juga menyediakan LCL ekspor/Impor ke atau dari berbagai tujuan.</li>
                        </ol>
                        <li class="isi-konten kanit">PT. Indotrans Jayamas Abadi menyediakan jasa custom baik untuk laut maupun udara maupun untuk keperluan import atau ekspor.</li>
                        <li class="isi-konten kanit">Proyek Cargo Kami dapat menangani pengiriman Proyek, seperti mengirim kargo dengan penanganan yang lebih spesifik.</li>
                        <li class="isi-konten kanit">Angkutan Domestik. Bekerjasama dengan Pengiriman Domestik dan agen di daerah, kami juga menyediakan jasa pengiriman antar daerah / antar pulau.</li>
                    </ol>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                </div>
            </div>
            <div class="my-xl-5 my-lg-4 my-md-3 my-sm-2 my-1 py-xl-5 py-lg-4 py-md-3 py-sm-2 py-1">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="tulisanJudul align-items-center my-auto titillium"><span>KEUNGGULAN</span></p>
                </div>
            </div>
            <div class="bg-white rounded-5 p-5 my-5 shadow">
                <ol>
                    <li class="titillium advantage">Lebih dari 15 tahun pengalaman di industri Forwarding dan Inland Transport Trucking.</li>
                    <li class="titillium advantage">Tim yang solid dan berpengalaman di bidangnya masing-masing.</li>
                    <li class="titillium advantage">Kepemilikan Armada Sendiri dengan standar keselamatan termasuk penanganan B3.</li>
                    <li class="titillium advantage">Total Solusi yang kami sediakan dengan harga terjangkau.</li>
                    <li class="titillium advantage">Membangun hubungan yang berkelanjutan dengan pelanggan dengan integritas perusahaan.</li>
                </ol>
            </div>
        </div>
    @endauth
    @else
        <div class="container">
            <div id="judul" class="d-flex justify-content-center">
                <img id="aboutus"  src="{{ asset('app/assets/image/aboutus.png') }}"/>
                <p class="tulisanJudul text-center my-auto mx-3">ABOUT US</p>
            </div>
            <div id="company" class="my-5 bg-white p-lg-5 pt-0 pt-lg-5 pb-2 px-4 rounded-5 shadow shadow-top-0">
                <div id="upperCompany" class="d-flex flex-column my-0 my-lg-5">
                    <div class="d-flex">
                        <p id="tulisan-company"  class="tulisanJudul titillium">COMPANY</p>
                    </div>
                    <div class="d-flex flex-column flex-lg-row">
                        <p class="isi-konten col col-12 col-lg-6 kanit" >PT. JAYAMAS ABADI started operating in 1999.
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
                <p class="isi-konten kanit">Currently, PT. JAYAMAS ABADI developed by opening a new business
                    in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                    ABADI. With the support of a solid team and the application of the
                    right technology in managing the business entrusted to us, we are
                    confident that we will be able to provide service satisfaction to our
                    customers and realize the CORPORATE MISSION and VISION
                    appropriately.
                </p>
            </div>
            <div class="my-xl-5 my-lg-4 my-md-3 my-sm-2 my-1 py-xl-5 py-lg-4 py-md-3 py-sm-2 py-">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="tulisanJudul align-items-center my-auto titillium"><span>SERVICES</span></p>
                </div>
            </div>
            <div class="bg-white rounded-5 p-3 d-flex flex-column my-5">
                <div  class="d-flex ms-4">
                    <p id="tulisan-jayamas"  class="tulisanJudul titillium">
                        PT. JAYAMAS ABADI
                    </p>
                </div>
                <div class="mx-5">
                    <ol style="list-style:lower-latin">
                        <li class="isi-konten kanit">Inland Transport (JABODETABEK, Inter Island) charter and cargo. We provide Trailer, CDE, CDD, FUSO and other transportation services to various destinations in Indonesia.</li>
                        <li class="isi-konten kanit">Employee Shuttle Tourism Charter (JABODETABEK)</li>
                        <li class="isi-konten kanit">Our Services Export Import by Air PT. Indotrans Jayamas Abadi, which serves Export and Import through trusted airlines to all destinations in the world, both small and large parties.</li>
                    </ol>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                </div>
            </div>
            <div class="my-5"></div>
            <div class="bg-white rounded-5 p-lg-3 d-flex flex-column my-5 justify-content-end">
                <div  class="d-flex justify-content-lg-end justify-content-center me-lg-5 mx-lg-0 mx-3">
                    <p id="tulisan-indotrans"  class="titillium">
                        PT. INDOTRANS JAYAMAS ABADI
                    </p>
                </div>
                <div class="mx-5">
                    <ol>
                        <li class="isi-konten kanit">Export Import by Sea</li>
                        <ol style="list-style:lower-latin">
                            <li class="isi-konten kanit">FCL --> We provide Export / Import cargo services for Full Container (20 feet / 40 feet / 40'HC / Refeer).</li>
                            <li class="isi-konten kanit">LCL --> We also provide LCL export/Import to or from various destinations.</li>
                        </ol>
                        <li class="isi-konten kanit">Custom Clearance PT. Indotrans Jayamas Abadi provides custom services both for sea and air as well as for import or export purposes.</li>
                        <li class="isi-konten kanit">Project Cargo We can handle Project shipments, such as sending cargo with more specific handling.</li>
                        <li class="isi-konten kanit">Domestic Freight. In collaboration with Domestic Shipping and agents in the area, we also provide inter-regional / inter-island shipping services.</li>
                    </ol>
                </div>
                <div class="d-flex flex-row justify-content-between">
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                    <img src="{{  asset('app/assets/image/image 8.png') }}" alt="" class="rounded-4" style="width:31%; height:auto"/>
                </div>
            </div>
            <div class="my-xl-5 my-lg-4 my-md-3 my-sm-2 my-1 py-xl-5 py-lg-4 py-md-3 py-sm-2 py-1">
                <div id="pembatas1" class="d-flex justify-content-center">
                    <p id="pembatas" class="tulisanJudul align-items-center my-auto titillium"><span>ADVANTAGES</span></p>
                </div>
            </div>
            <div class="bg-white rounded-5 p-5 my-5 shadow">
                <ol>
                    <li class="titillium advantage">More than 15 years of experience in the Forwarding and Inland Transport \Trucking industry.</li>
                    <li class="titillium advantage">A solid and experienced team in their respective fields.</li>
                    <li class="titillium advantage">Own Fleet Ownership with safety standards including B3 handling.</li>
                    <li class="titillium advantage">Total Solutions that we provide at affordable prices.</li>
                    <li class="titillium advantage">Building sustainable relationships with customers with company integrity.</li>
                </ol>
            </div>
        </div>
    @endif
@endsection