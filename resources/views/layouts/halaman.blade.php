<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('app/assets/image/logo_jayamas.png')}}">
    <link rel="stylesheet" href="././css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @yield('link')
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
    <style>

        .logo {
            width: 100px;
            margin-right: 15px;
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

        @media only screen and (max-width: 820px) {
            .logo {
                width:74.5px !important;
                height:42.5px !important;
            }
            .nav-top-left > p {
                font-size:18px!important;
            }
            .nav-top-right > a {
                font-size:16px;
            }
            .nav-top-right > p {
                font-size:16px;
            }
            .nav-bottom > p{
                font-size:12px!important;
            }
            .nav-bottom {
                height:40px!important;
            }
            .dropbtn {
                padding: 8px;
            }
        }
        @media only screen and (max-width: 450px) {
            .logo {
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
            .dropbtn {
                font-size: 12px;
                padding: 0;
            }
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color:#011D83;}
        /* footer */
        @media screen and (max-width:575px){
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
        /* DROPDOWN */
    </style>
@yield('style')
</head>
<style>
    
</style>
<body>
    @auth
        @if (Auth::user()->language == 1)
        <nav class="nav" style="background-color: white;">
                <div class="nav-top">
                    <div class="nav-top-left">
                        <a href="/" class="my-auto"><img src="{{asset('app/assets/image/logo_jayamas.png')}}" class="logo"/></a>
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
                        <a href="/privacy" class="top-text my-auto">Register</a>
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
        @elseif (Auth::user()->language == 2)
            <nav class="nav" style="background-color: white;">
                <div class="nav-top">
                    <div class="nav-top-left">
                        <a href="/" class="my-auto"><img src="{{asset('app/assets/image/logo_jayamas.png')}}" class="logo"/></a>
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
                        <a href="{{ route('login') }}" class="top-text my-auto">Masuk</a>
                        <p class="top-text my-auto">&nbsp;|&nbsp;</p>
                        <a href="/privacy" class="top-text my-auto">Registrasi</a>
                    </div>
                    @endif
                </div>
                <div class="nav-bottom">
                    <a href="/aboutus" class="nav-text my-auto">Tentang Kami</a>
                    <a href="/service" class="nav-text my-auto">Layanan</a>
                    <a href="/visi&misi" class="nav-text my-auto">Visi & Misi</a>
                    @auth
                    @if(Auth::user())
                    <div class="dropdown">
                        <button class="dropbtn">Bahasa</button>
                        <div class="dropdown-content">
                            <a href="/change/language/{{ Auth::user()->id }}/1">Inggris</a>
                            <a href="/change/language/{{ Auth::user()->id }}/2">Indonesia</a>
                        </div>
                    </div>
                    @endauth    
                    @else
                    <a href="/login" class="nav-text my-auto">Bahasa</a>
                    @endif
                </div>
            </nav>
    @endauth
        @else
            <nav class="nav" style="background-color: white;">
                <div class="nav-top">
                    <div class="nav-top-left">
                        <a href="/" class="my-auto"><img src="{{asset('app/assets/image/logo_jayamas.png')}}" class="logo"/></a>
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
                        <a href="/privacy" class="top-text my-auto">Register</a>
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
        @endif
        
    @yield('isi')
    
    <footer class="mt-5">
        <div class="px-5 py-3 w-100 d-flex flex-lg-row flex-column bg-white">
            <div class="col col-12 col-lg-4">
                <p class="footer-head kanit">Contact Us</p>
                <div class="col col-12 d-flex">
                    <img class="col col-2 col-lg-2 gambar-footer-kiri"src="{{ asset('app/assets/image/wa.png') }}" style=""/>
                    <div class="col col-9 col-lg-9 mx-2 my-auto">
                        <p class="mb-0 isi-footer kanit">+6221 8899 2212 ( Hunting )</p>
                        <p class="mb-0 isi-footer kanit">+6281 1122 6395</p>
                        <p class="mb-0 isi-footer kanit">+6281 1122 6396</p>
                    </div>
                </div>
                <div class="col col-12 d-flex my-4">
                    <img class="col col-2 col-lg-2 gambar-footer-kiri" src="{{ asset('app/assets/image/email.png') }}" style=""/>
                    <div class="col col-9 col-lg-9 mx-2 my-auto">
                        <p class="mb-0 isi-footer kanit">cs@jayamasabadi.id</p>
                        <p class="mb-0 isi-footer kanit">Sales@jayamasabadi.id</p>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-lg-4 my-3 my-lg-0">
                <p class="footer-head kanit">Our Office</p>
                <p class="mb-0 office-head kanit">Head Office :</p>
                <p class="isi-footer kanit">Jl. Marunda Makmur No. 1 RT 002 RW 008
                    Kebon Kelapa Segara Makmur,
                    Taruma Jaya, Bekasi 17211 Indonesia</p>
                <p class="mb-0 office-head kanit">Sales/Operational Office</p>
                <p class="isi-footer kanit">Kirana Commercial Avenue,
                    Bella Terra Lifestyle Center Lt. 1 No. 26
                    Jl. Boulevard Raya A2 No. 1 Kelapa Gading, Jakarta Utara</p>
                <p class="mb-0 office-head kanit">Cilegon Office</p>
                <p class="isi-footer kanit">
                    Jl. Lingkar Selatan KM.5,
                    Karangasem, Kec. Cibeber,
                    Kota Cilegon, Banten 42426
                </p>
            </div>
            <div class="col col-12 col-lg-4 d-flex justfy-content-center flex-column">
                <p class="text-center footer-head kanit">Member of APTRINDO</p>
                <img src="{{ asset('app/assets/image/aptrindo.png') }}" class="mx-auto gambar-footer"/>
            </div>
        </div>
    </footer>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>