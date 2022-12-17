<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. INDOTRANS JAYAMAS ABADI</title>
    <link rel="icon" href="{{asset('app/assets/image/logo_jayamas.png')}}">
    <link rel="stylesheet" href="././css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- ini font --}}
    {{-- titilium web --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    {{-- kanit --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Kanit&display=swap');
        .titillium{
            font-family: 'Titillium Web', sans-serif !important;
        }
        .kanit{
            font-family: 'Kanit', sans-serif !important;
        }
    </style>
</head>
<style>
    body{background-color: #B0D1FC !important}
    @media only screen and (max-width: 820px) {
        .nav-top-left > img{
            width:74.5px !important;
            height:42.5px !important;
        }
        .nav-top-left > p {
            font-size:18px!important;
        }
        .nav-top-right > p {
            font-size:16px !important;
        }
        .nav-bottom > p{
            font-size:12px!important;
        }
        .nav-bottom {
            height:40px!important;
        }
    }
    @media only screen and (max-width: 450px) {
        .nav-top-left > img{
            width:54.5px !important;
            height:28.5px !important;
        }
        .nav-top-left > p {
            font-size:14px!important;
        }
        .nav-top-right > p {
            font-size:11px !important;
        }
        .nav-bottom {
            height:30px!important;
        }
        .nav-bottom a {
            font-size:12px !important;
        }

    }
    .nav-top {
        width:90%;
        margin-left: auto;
        margin-right: auto;
        display:flex;
        justify-content:space-between;
    }
    .nav-top-left {
        display: flex;
    }
    .nav-top-right {
        display: flex;
    }
    .nav-top-left > img{
        width:114.5px;
        height:72.5px;
    }
    .nav-bottom {
        color:white;
        justify-content: space-around;
        width:100%;
        height:50px;
        display:grid;
        background-color:#011D83;
        grid-template-columns: auto auto auto auto;
    }
    .top-text {
        font-size: 30px;
        text-decoration: none;
        color: black;
    }
    .nav-text {
        color: white;
        text-decoration: none;
    }
    .nav-text:hover {
        color: white;
        font-weight: bold;
    }

    /* DROPDOWN */

    .dropbtn {
        background-color:#011D83;
        color: white;
        padding: 13px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 9999;
    }

    .tulisanJudul{
        color:#011D83;
        font-weight:bolder;
    }
    
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    #pembatas1 p {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid #011D83; 
        line-height: 0.1em;
        margin-top: auto;
        margin-bottom: auto;
        color: #011D83;
        font-weight: bolder;
    } 

    #pembatas span { 
        background: white; 
        padding:0 10px; 
        margin-top: auto;
        margin-bottom: auto;
    }

    #pembatas1 {
        background-color: white;
        border-radius: 20px;
        height:50px;
        margin-right: auto;
        margin-left: auto;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }

    .kiri, .kanan, .bawah{
        border-radius: 25px;
        box-shadow:10px 10px #011D83;
    }
    p.tulisan-tiga{
        font-weight: bolder;
    }
    .kanan>div>a, .kiri>div>a{
        background-color: #5571D1;
        border-radius: 10px;
        font-size: 30px;
    }
    .isi-service{
        font-size: 20px;
    }
    a.isi-service{
        background-color: #5571D1;
        font-size: 20px;
        width:60px;
        border-radius: 10px;
    }

    

    .footer-kanan{
        border: 10px solid #011D83;
    }
    footer{
        margin-bottom: 58px;
    }
    .sticky_login {
        background-color: #6586F8;
        display:flex;
        justify-content: space-around;
        position:fixed;
        bottom:0px;
        margin-top:auto;
        padding: 10px;
        width:100%;
        /* justify-content: space-between; */
        /* top:100%; */
        z-index:2;
    }
    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color:#011D83;}

    /* DROPDOWN */
    body{
        background-color: 
    }
    @media screen and (max-width:575px){
        #aboutus{
            width:80px;
            height:auto;
        }
        
        .isi-konten{
            font-size: 16px;
        }

        .tulisanJudul{
            font-size: 36px;
        }

        #tulisan-company{
            margin-top: -30px;
        }
        .judul-atas{
            font-size: 20px;
        }
        .gambar-tiga{
            width:110px;
            height:auto;
        }
        .tulisan-tiga{
            font-size: 28px;
            font-weight: bolder;
        }
        .kanan>div>a, .kiri>div>a{
            background-color: #5571D1;
            font-size: 17px;
        }
        .isi-service{
            font-size: 17px;
        }
        /* footer */
        .our-office{
            font-size: 16px;
        }
        .head-office{
            font-size: 12px;
        }
        .isi-footer{
            font-size: 10px;
        }
        .footer-kiri{
            width:100%;
            height:auto;
            border-top: 8px solid #011D83;
        }
        .footer-kanan{
            width:300px;
            height:300px;
        }
        .contact_img{
            width:35px;
            height:35px;
        }
        .aptrindo{
            width:70px;
            height:auto;
        }
        .button-sticky{
            width:90px;
            font-size: 10px;
        }
        .gambar_cs{
            width:110px;
            height:110px;
        }
    }

    @media screen and (min-width:576px){
        #aboutus{
            width:90px;
            height:auto;
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

        .judul-atas{
            font-size: 20px;
        }
        .gambar-tiga{
            width:130px;
            height:auto;
        }
        .tulisan-tiga{
            font-size: 35px;
            font-weight: bolder;
        }
        .kanan>div>a, .kiri>div>a{
            background-color: #5571D1;
            font-size: 20px;
        }
        
        /* footer */
        .our-office{
            font-size: 16px;
        }
        .head-office{
            font-size: 12px;
        }
        .isi-footer{
            font-size: 10px;
        }
        .footer-kiri{
            width:100%;
            height:auto;
            border-top: 8px solid #011D83;
        }
        .footer-kanan{
            width:350px;
            height:350px;
        }
        .contact_img{
            width:39px;
            height:39px;
        }
        .aptrindo{
            width:75px;
            height:auto;
        }
        .button-sticky{
            width:100px;
            font-size: 12px;
        }
        .gambar_cs{
            width:120px;
            height:120px;
        }
    }

    @media screen and (min-width:767px){
        #aboutus{
            width:105px;
            height:auto;
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

        .judul-atas{
            font-size: 20px;
        }
        .kanan, .kiri{
            width:47%;
        }
        .gambar-tiga{
            width:160px;
            height:auto;
        }
        .tulisan-tiga{
            font-size: 35px;
            font-weight: bolder;
        }
        .kanan>div>a, .kiri>div>a{
            background-color: #5571D1;
            font-size: 25px;
        }
        .kanan, .kiri{
            width:47%;
        }
        
        /* footer */
        .our-office{
            font-size: 17px;
        }
        .head-office{
            font-size: 14px;
        }
        .isi-footer{
            font-size: 11px;
        }
        .footer-kiri{
            width:100%;
            height:auto;
            border-top: 10px solid #011D83;
        }
        .footer-kanan{
            width:370px;
            height:370px;
        }
        .contact_img{
            width:44px;
            height:auto;
        }
        .aptrindo{
            width:85px;
            height:auto;
        }
        .button-sticky{
            width:110px;
            font-size: 13px;
        }
        .gambar_cs{
            width:130px;
            height:130px;
        }
    }

    @media screen and (min-width:992px){
        #aboutus{
            width:125px;
            height:auto;
        }
        .judul-atas{
            font-size: 25px;
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
        .gambar-tiga{
            width:160px;
            height:auto;
        }
        .tulisan-tiga{
            font-size: 40px;
            font-weight: bolder;
        }
        .kanan, .kiri{
            width:47%;
        }
        .kanan>div>a, .kiri>div>a{
            background-color: #5571D1;
            font-size: 30px;
        }
        
        /* footer */
        .our-office{
            font-size: 17px;
        }
        .head-office{
            font-size: 13px;
        }
        .isi-footer{
            font-size: 11px;
        }
        .footer-kiri{
            border-top: 10px solid #011D83;
            border-right: 10px solid #011D83;
            border-top-right-radius: 500px;
            width:65%;
            height:auto;
        }
        .footer-kanan{
            width:35%;
            
        }
        .contact_img{
            width:48px;
            height:auto;
        }
        .aptrindo{
            width:95px;
            height:auto;
        }
        .button-sticky{
            width:125px;
            font-size: 15px;
        }
        .gambar_cs{
            width:140px;
            height:140px;
        }
    }

    @media screen and (min-width:1200px){
        #aboutus{
            width:150px;
            height:auto;
        }
        .judul-atas{
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
        .gambar-tiga{
            width:200px;
            height:auto;
        }
        .tulisan-tiga{
            font-size: 50px;
            font-weight: bolder;
        }
        .kanan, .kiri{
            width:47%;
        }
        .kanan>div>a, .kiri>div>a{
            background-color: #5571D1;
        }
       
        /* footer */
        .our-office{
            font-size: 20px;
        }
        .head-office{
            font-size: 15px;
        }
        .isi-footer{
            font-size: 13px;
        }
        .footer-kiri{
            border-top: 10px solid #011D83;
            border-right: 10px solid #011D83;
            border-top-right-radius: 500px;
            width:65%;
            height:auto;
        }
        .footer-kanan{
            width:35%;
            height:auto;
        }
        .contact_img{
            width:54px;
            height:auto;
        }
        .aptrindo{
            width:110px;
            height:auto;
        }

        .button-sticky{
            width:150px;
            font-size: 17px;
        }
        .gambar_cs{
            width:150px;
            height:150px;
        }
    }
    
    
</style>
<body>
    <nav class="nav" style="background-color: white;">
        <div class="nav-top">
            <div class="nav-top-left">
                <a href="/"><img src="{{asset('app/assets/image/logo_jayamas.png')}}" alt="" style="width:100px; margin-right: 15px;"/></a>
                <p style="margin-top:auto;margin-bottom:auto;font-size:30px;">PT Indotrans Jayamas Abadi</p>
            </div>
            @auth
            @if (Auth::user())
            <div class="d-flex nav-top-right">
                <p style="margin-top:auto;margin-bottom:auto;font-size:30px;">{{ Auth::user()->username }}</p>
                <a href="/profile" class="my-auto"><img src="{{ asset('app/'.Auth::user()->photo )}}" class="rounded-circle ms-3" style="width: 60px;" /></a>
            </div>
            @endauth
            @else
            <div class="d-flex nav-top-right">
                <a href="{{ route('login') }}" class="top-text my-auto">Login</a>
                <p class="top-text my-auto">&nbsp;|&nbsp;</p>
                <a href="{{ route('register') }}" class="top-text my-auto">Register</a>
            </div>
            @endif
        </div>
        <div class="nav-bottom">
            <a href="/aboutus" class="nav-text my-auto">About Us</a>
            <a href="/service" class="nav-text my-auto">Services</a>
            <a href="/visi&misi" class="nav-text my-auto">Vision & Mission</a>
            @auth
            @if(Auth::user())
            <div class="dropdown">
                <button class="dropbtn">Language</button>
                <div class="dropdown-content">
                    <a href="/change/language/{{ Auth::user()->id }}/1">English</a>
                    <a href="/change/language/{{ Auth::user()->id }}/2">Indonesia</a>
                </div>
            </div>
            @endauth    
            @else
            <a href="/login" class="nav-text my-auto">Language</a>
            @endif
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="true">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('app/assets/image/shipment.png') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('app/assets/image/slider-2.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('app/assets/image/slider-3.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('app/assets/image/slider-4.png')}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="{{asset('app/assets/image/slider-5.png')}}" class="d-block w-100" alt="...">
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-5">
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
        <div class="mt-5">
            <div id="pembatas1" class="d-flex justify-content-center">
                <p id="pembatas" class="judul-atas titillium align-items-center my-auto"><span>MORE</span></p>
            </div>
        </div>
        <div class="my-5 d-flex flex-md-row flex-column justify-content-md-between">
            <div class="kiri bg-white d-flex p-5 mx-1 flex-lg-row flex-column ">
                <img src="{{asset('app/assets/image/visi misi.png')}}" class="gambar-tiga img-fluid mx-auto mx-lg-0">
                <div class="d-flex flex-column justify-content-center  mx-auto mx-lg-0">
                    <h3 class="tulisan-tiga titillium text-center mx-lg-0 d-flex align-items-start">VISION & MISSION</h3>
                    <a href="" class="titillium mx-auto w-100 text-decoration-none text-white d-flex justify-content-center align-items-center">GO</a>
                </div>
            </div>
            <div class="kanan bg-white d-flex p-5 mx-1 flex-lg-row flex-column my-5 my-md-0">
                <img src="{{asset('app/assets/image/about_us.png')}}" class="gambar-tiga img-fluid mx-auto mx-lg-0">
                <div class="d-flex flex-column justify-content-center mx-auto mx-lg-0">
                    <h3 class="tulisan-tiga titillium d-flex align-items-start">ABOUT US</h3>
                    <a href="" class="titillium mx-auto w-100 text-decoration-none row-2 text-white d-flex justify-content-center align-items-center">GO</a>
                </div>
            </div>
        </div>
        <div class="bawah bg-white d-flex flex-lg-row flex-column p-5">
            <img src="{{asset('app/assets/image/service.png')}}" class="gambar-tiga mx-auto mx-lg-0 img-fluid">
            <div class="mx-lg-4 mx-auto ">
                <h3 class="titillium tulisan-tiga d-flex justify-content-center justify-content-lg-start">SERVICES</h3>
                <p class="titillium isi-service text-center text-lg-start">
                    Ingin melakukan pemesanan jasa pengantaran barang secara domestik ataupun ekspor dan impor? Melalui jalur apapun?
                    PT Indotrans Jayamas Abadi menjadi pilihan yang  tepat.
                </p>
                <div class="d-flex flex-lg-row flex-column justify-content-lg-between">
                    <p class="titillium isi-service d-flex justify-content-center justify-content-lg-start">Silahkan lakukan pemesanan</p>
                    <a href="" class="titillium isi-service mx-auto mx-lg-0 text-decoration-none d-flex justify-content-center align-items-center text-white">GO</a>
                </div>
            </div>
        </div>
    </div>
    <footer style="background-color: #DCEBFF !important" class="">
        <div class="d-flex gap-5" style=""> 
            <hr class="flex-grow-1 my-auto" style="height:5px;color:#011D83;opacity:1;background-color:#011D83;"/><p style="color:#011D83;font-weight:900" class="titillium tulisan-tiga">GET MORE INFORMATION</p>
        </div>
        <div class="footer-bawah d-flex flex-column-reverse flex-lg-row justify-content-center">
            <div class="footer-kiri titillium bg-white d-flex flex-row p-3 mx-auto mt-lg-0 mt-3 justify-content-around justify-content-lg-start">
                <div class="kiri-bawah ">
                    <div class="contact-us">
                        <p class="our-office"><b>Contact Us</b></p>
                        <div class="wa d-flex flex-row">
                            <img src="{{asset('app/assets/image/whatsapp.png')}}" class="contact_img me-2"/>
                            <div class="no-telp">
                                <p class="isi-footer mb-0">+6221 8899 2212 ( Hunting )</p>
                                <p class="isi-footer mb-0">+6281 1122 6395</p>
                                <p class="isi-footer mb-0">+6281 1122 6396</p>
                            </div>
                        </div>
                        <div class="mail d-flex flex-row my-3">
                            <img src="{{asset('app/assets/image/email.png')}}" class="contact_img me-2" />
                            <div class="my-auto">
                                <p class="isi-footer mb-0">cs@jayamasabadi.id</p>
                                <p class="isi-footer mb-0">Sales@jayamasabadi.id</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column member justify-content-center">
                        <p class="mx-auto my-3 our-office"><b>Member of APTRINDO</b></p>
                        <img src="{{asset('app/assets/image/aptrindo.png')}}" class="aptrindo mx-auto" alt="">
                    </div>
                </div>
                <div class="office titillium col col-4 mx-3">
                    <p class="our-office"><b>Our Office</b></p>
                    <p class="head-office"><b>Head Office</b></p>
                    <p class="isi-footer">Jl. Marunda Makmur No. 1 RT 002 RW 008
                        Kebon Kelapa Segara Makmur,
                        Taruma Jaya, Bekasi 17211 Indonesia</p>
                    <p class="head-office"><b>Sales / Operational Office : </b></p>
                    <p class="isi-footer">Kirana Commercial Avenue,
                        Bella Terra Lifestyle Center Lt. 1 No. 26
                        Jl. Boulevard Raya A2 No. 1 Kelapa Gading, Jakarta Utara</p>
                    <p class="head-office"><b>Cilegon Office : </b></p>
                    <p class="isi-footer">Jl. Lingkar Selatan KM.5,
                        Karangasem, Kec. Cibeber,
                        Kota Cilegon, Banten 42426</p>
                </div>
            </div>
            <div class="footer-kanan bg-white d-flex flex-column p-5 rounded-circle mx-auto">
                <img src="{{asset('app/assets/image/customer_support.png')}}" class="mx-auto gambar_cs" style=""alt=""/>
                <p class="titillium isi-footer text-center">We are always open to answer you, if you have something to tell us,
                     whether it is a question, suggestion or critics don’t hesitate to contact us.</p>
                
            </div>
        </div>
    </footer>
    <div class="sticky_login d-flex flex-md-row flex-column">
        <p class="my-md-auto ms-md-5 ms-0 isi-footer my-2 text-center" style="color: white;">Login or register first to unlock more features, and get more information about our updates</p>
        <div class="d-flex my-auto mx-auto">
            <a href="{{ route('login') }}" class="btn button-sticky rounded-pill me-3 titillium" style="background-color: #B0D1FC;">Login</a>
            <a href="{{ route('register') }}" class="btn button-sticky rounded-pill titillium" style="background-color: #B0D1FC;">Register</a>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
