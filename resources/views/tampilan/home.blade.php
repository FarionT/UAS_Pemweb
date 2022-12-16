@extends('layouts.halaman')
@section('title','home')
@section('style')
<style>
    @media only screen and (max-width: 1250px) {
        .footer_left {
            padding-left:20px !important;
            gap:20px !important;
        }
        .footer_left p {
            font-size:12px !important;
        }
        .text_big {
            font-size:16px !important;
        }
        .footer_right p{
            font-size:14px !important; 
        }
        .home_after_more_card >img {
            width: 250px !important; 

        }
        .deskripsi_company1 > img {
            width: 500px !important;
            height: 361px !important;
        }
        .deskripsi_company1 > p {
            font-size:1.2rem!important;
        }
        .deskripsi_company2  {
            font-size:1.2rem!important;
        }
        .button_more {
            background-color:#011D83;
            padding:0px;
            opacity:0.65;
            width:200px !important;
            font-size:50px !important;
            border-radius:20px;
            color:white;
        }
        
      
    }
    @media only screen and (max-width: 1000px) {
        .home_company {
            gap:10px !important;
        }
        .deskripsi_company1 {
            flex-direction:column-reverse!important;
        }
        .home_after_more_card >img {
            width: 40% !important; 

        }
        .home_after_more_services >img {
            width: 100%!important; 

        }
        .deskripsi_pesanan {
            font-size:1rem !important;
        }
        .button_more {
            width:100px !important;
            font-size:50px !important;
        }
        .button_more > p {
            font-size:2rem !important;
        }
        .tulisan_company {
            font-size:3rem !important;
        }
        .company_box {
            margin-top:-120px!important;
        }
        .deskripsi_company1 > img {
            width:100%!important;
        }
        .deskripsi_company1 > p {
            font-size:1.3rem!important;
        }
        .deskripsi_company2  {
            font-size:1.3rem!important;
        }
        
        .service_button {
            flex-direction: column !important;
        }
        /* .footer_left {
            flex-direction: column;
        } */
        .footer_content {
            flex-direction: column-reverse;
            justify-content: center !important;
            align-items: center;
            gap:50px;
        }
        .footer_left {
            border-radius:0px !important;
            border-right: none !important;
            width: 100% !important;
            justify-content: space-around !important;
        }
        .footer_right {
            width:70% !important;
            height:auto !important;
        }
        .more {
            margin-top: 50px !important;
        }
    }
    @media only screen and (max-width: 820px) {
        .deskripsi_company1 {
            flex-direction:column-reverse!important;
        }
        .tulisan_company {
            font-size:3rem !important;
        }
        .company_box {
            margin-top:-120px!important;
        }
        /* .deskripsi_company1 > img {
            width:100%!important;
        } */
        .deskripsi_company1 > p {
            font-size:1.3rem!important;
        }
        .deskripsi_company2  {
            font-size:1.3rem!important;
        }
        .home_after_more {
            grid-template-columns:100% !important;
        }
        .home_after_more_services {
            display:flex !important;
            align-items: center;
            gap:10px !important;
            grid-column: span 1 !important;
        }
        .deskripsi_pesanan {
            display: none;
        }
        .service_button {
            flex-direction: column !important;
        }
        /* .footer_left {
            flex-direction: column;
        } */
        .footer_content {
            flex-direction: column-reverse;
            justify-content: center !important;
            align-items: center;
            gap:20px;
        }
        .footer_left {
            border-radius:0px !important;
            border-right: none !important;
            width: 100% !important;
            justify-content: space-around !important;
        }
        .home_after_more_card {
            align-items: center;
            gap:50px !important;
            /* justify-content: space-around !important; */
        }
        .service_button > p {
            font-size: 2rem !important;
        }
        .footer_right {
            width:94% !important;
            height:94% !important;
        }
        .home_after_more_services img {
            width:40% !important;
        }
    }
    @media only screen and (max-width: 475px) {
        .text_big {
            font-size:0.8rem !important;
        }
        .service_button {
            gap:0px !important;
        }
        .home_after_more {
            gap:20px !important;
        }
        /* .home_after_more img {
            width:150px !important;
        } */
        .home_after_more_card div > p {
            font-size: 2rem !important;
        }
        .home_after_more_services div > p {
            font-size: 2rem !important;
        }
        .home_after_more_services div div > p {
            font-size: 0.8rem !important;
        }
        .home_company {
            gap:5px !important;
        }
        .button_more {
            width:100px !important;
        }
        .button_more > p {
            font-size: 1rem !important;
        }
        .footer_content {
            flex-direction: column-reverse;
            justify-content: center !important;
            align-items: center;
            gap:20px;
        }
        .footer_left {
            border-radius:0px !important;
            border-right: none !important;
            width: 100% !important;
            /* align-items: center !important; */
            padding-left:0px !important;
            padding-top:20px !important;
            justify-content: space-around !important;
        }
        .footer_left p {
            font-size:0.5rem;
        }
        .footer_right {
            width:94% !important;
            /* height: 100% !important; */
            height: 100% !important;
        }
        .footer_right p {
            font-size: 0.7rem !important;
            width: 100% !important;
        }
        .contact_img {
            width:40px !important;
            height: 40px !important
        }
        .aptrindo {
            width:60px !important;
            height:60px !important;
        }
        .footer_right img {
            width:120px !important;
            height:120px !important;
        }
        .deskripsi_company1 > img {
            width:100%!important;
            height: 100%!important;
        }
        .deskripsi_company1 > p{
            font-size:0.7rem !important;
        }
        .deskripsi_company2 {
            padding:20px !important;
            padding-top: 0px !important;
            font-size :0.7rem !important;
        }
        .deskripsi_company1 {
            padding:50px 20px 10px 20px!important;
        }
        .more {
            margin-top: 20px !important;
            margin-bottom: 20px !important;
        }
        .get_more_info {
            font-size:1rem !important;
        }
        .pesanan {
            width:60% !important;
        } 
    }
    body {
        background-color: #B0D1FC
    }
    /* ini homepage */
    .home_company {
        display:flex;
        flex-direction: column;
        gap:20px;
    }
    .home_company_section {
        /* display:grid;
        justify-content:around; */
        grid-template-columns: 50% 50%;
        background-color:white;
        width:90%;
        margin-right:auto;
        margin-left:auto;
        margin-top:50px;
        border-radius:50px;
        text-align:center;
    }
    .tulisan_company {
        text-align:start;
        font-size:65px;
        padding-left:50px;
        margin-left:auto;
        margin-right:auto;
        gap:10%;
    }
    .deskripsi_company1 {
        display:flex;
        justify-content:center;
        padding-top:50px;
        padding-right:50px;
        padding-left:50px;
        margin-left:auto;
        margin-right:auto;
        gap:10%;
    }
    .deskripsi_company2 {
        grid-column:span 2;
        font-size:25px;
        text-align:start;
        padding:39px 50px 50px 50px; 
        margin-left:auto;
        margin-right:auto;
    }
    .more {
        width:90%;
        background-color: white;
        display:grid;
        grid-template-columns: auto 20% auto;
        margin:50px auto 50px auto;
        text-align:center;
        border-radius:40px;
    }
    .home_after_more {
        width:90%;
        margin-left:auto;
        margin-right:auto;
        display:grid;
        grid-template-columns: auto auto;
        gap:50px;
    }
    .home_after_more_services {
        background-color:white;
        border-radius:30px;
        display:grid;
        gap:50px;
        grid-template-columns: auto auto;
        justify-content:center;
        box-shadow: 5px 10px #011D83;
    }
    .home_after_more_services div > p {
        font-size:60px;
        font-weight: bold;
    }
    .home_after_more_card div > p {
        font-size:60px;
        font-weight: bold;
    }
    .home_after_more_card {
        background-color:white;
        border-radius:30px;
        display:flex;
        justify-content:center;
        box-shadow: 5px 10px #011D83;
    }
    .button_more {
        background-color:#011D83;
        padding:0px;
        opacity:0.65;
        width:261px;
        font-size:50px;
        border-radius:20px;
        color:white;
    }
    .services {
        grid-column:span 2;
    }
    .footer_content{
        display:flex;
        justify-content: space-between;
    }
    .footer_left {
        display:flex;
        border-top-right-radius: 1000px;
        border-top:#011D83 solid 20px;
        border-right:#011D83 solid 20px;
        background-color: white;
        padding-left:50px;
    }
    .contact_list >p {
        margin-top:0px;
        margin-bottom:0px;
    }
    .home_company_section {
        
    }
</style>
@endsection

@section('isi')
{{-- <img src="{{asset('app/assets/logo_jayamas.png')}}" /> --}}

@auth
    @if (Auth::user()->language == 1)
        <div class="home_company">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
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
            <div style="width:90%;margin-left:auto;margin-right:auto;z-index:2;">
                <p class="tulisan_company">COMPANY</p>
            </div>
            <div style="margin-top:-130px;" class="company_box">
                <div class="home_company_section">
                    <div class="deskripsi_company1"> 
                        <p style="font-size:25px;text-align:start;">PT. JAYAMAS ABADI started operating in 1999.
                            The business started from scratch as a transporter serving in the city,
                            and then began to grow by serving JABODETABEK in 2002.
                            The great response from our customers made us more confident to
                            be able to add units and be able to provide domestic outbound
                            transportation services. Currently we have served transportation
                            outside Java, namely Sumatra, Kalimantan, as well as several
                            destinations in Eastern Indonesia.
                        </p>
                        <img src="{{asset('app/assets/image/image 11.png')}}" style="width:549px;height:411px;"alt="">              
                    </div>
                    <p class="deskripsi_company2">Currently, PT. JAYAMAS ABADI developed by opening a new business
                        in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                        ABADI. With the support of a solid team and the application of the
                        right technology in managing the business entrusted to us, we are
                        confident that we will be able to provide service satisfaction to our
                        customers and realize the CORPORATE MISSION and VISION
                        appropriately.
                    </p>
                </div>
                <div class="more">
                    <hr style="margin-top:auto;margin-bottom:auto;margin-left:20px;"/><p style="margin-left:auto;margin-right:auto;font-size:30px;" class="my-auto">MORE</p><hr style="margin-top:auto;margin-bottom:auto;margin-right:20px;"/>
                </div>
        
                <div class="home_after_more">
                    <div class="home_after_more_card">
                        <img src="{{asset('app/assets/image/visi misi.png')}}" style="width:300px;padding-top:50px;padding-bottom:50px;">
                        <div style="padding-top:50px;padding-bottom:50px;">
                            <p>Vision & <br>Mission</p>
                            <button class="button_more"><p style="margin-top: auto;margin-bottom:auto;">GO</p></button>
                        </div>
                    </div>
                    <div class="home_after_more_card">
                        <img src="{{asset('app/assets/image/about_us.png')}}" style="width:300px;padding-top:50px;padding-bottom:50px;">
                        <div style="padding-top:50px;padding-bottom:50px;">
                            <p>About<br>US</p>
                            <button class="button_more"><p style="margin-bottom:auto;">CHECK</p></button>
                        </div>
                    </div>
                    <div class="home_after_more_services"  style="grid-column:span 2;gap:50px;">
                        <img src="{{asset('app/assets/image/service.png')}}" style="width:300px;padding-top:50px;padding-bottom:50px;">
                        <div style="padding-top:50px;padding-bottom:50px;">
                            <p>SERVICES</p>
                            <p  style="font-size:28px;" class="deskripsi_pesanan">Want to order goods delivery services domestically <br> or export and import? <br> Through any path?
                                PT Indotrans Jayamas Abadi <br> is the right choice. </p>
                            <div style="display:flex; gap:3rem;" class="service_button">
                                <p style="font-size:28px;" class="silahkan_pesan">Please Place an Order</p><button class="button_more"><p style="margin-bottom:auto;">GO</p></button>
                            </div>
            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="d-flex gap-5" style="margin-top:80px"> 
            <hr class="flex-grow-1 my-auto" style="height:5px;color:#011D83;opacity:1;background-color:#011D83;"/><p style="font-size:40px;color:#011D83;font-weight:900" class="get_more_info">GET MORE INFORMATION</p>
        </div>
        <footer style="background-color:#DCEBFF;margin-top:-2.5rem" class="pt-5">
            <div class="footer_content">
                <div class="footer_left flex-grow-1 gap-5 pt-5">
                    <div class="contact_us">
                        <p style="font-weight:bold;font-size:32px;" class="text_big">Contact Us</p>
                        <div class="d-flex mt-3 gap-3">
                            <img src="{{asset('app/assets/image/whatsapp.png')}}" class="contact_img" style="width:61px;height:62px;">
                            <div class="contact_list">
                                <p>+6221 8899 2122(Hunting)</p>
                                <p>+6281 1122 6395</p>
                                <p>+6281 1122 6396</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 gap-3">
                            <img src="{{asset('app/assets/image/email.png')}}" class="contact_img" style="width:61px;height:62px;"/>
                            <div>
                                <p>cs@jayamasabadi.id</p>
                                <p>Sales@jayamasabadi.id</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <b><p style="font-size:24px;" class="text_big">Member of APTRINDO</p></b>
                            <img src="{{asset('app/assets/image/aptrindo.png')}}" class="aptrindo" style="width:125px;height:120.5px;"alt="">
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="our_office" style="font-family: Titillium Web">
                            <p style="font-weight:bold;font-size:32px;" class="text_big">Our Office</p>
                            <p>
                                <b class="text_big">Head Office :</b><br/>
                                Jl. Marunda Makmur No. 1 RT 002 RW 008 <br>
                                Kebon Kelapa Segara Makmur, <br>
                                Taruma Jaya, Bekasi 17211 Indonesia <br>
                            </p>
                            <p>
                                <b class="text_big">Sales / Operational Office : </b>
                                Kirana Commercial Avenue, <br>
                                Bella Terra Lifestyle Center Lt. 1 No. 26 <br>
                                Jl. Boulevard Raya A2 No. 1 Kelapa Gading, Jakarta Utara
                            </p>
                            <p>
                                <b class="text_big">Cilegon Office : </b>
                                Jl. Lingkar Selatan KM.5, <br>
                                Karangasem, Kec. Cibeber, <br>
                                Kota Cilegon, Banten 42426 <br>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="footer_right rounded-circle " style="background-color: white;border:#011D83 solid 20px;width:539px;height:539px;">
                    <div class="p-4 d-flex flex-column">
                        <img src="{{asset('app/assets/image/customer_support.png')}}" class="mx-auto" style="width:150px;height:150px;"alt=""/>
                        <p style="width:439px;font-size:23px;text-align:center;" class="mx-auto">We are always open to answer you, if you have something to tell us, whether it is a question, suggestion or critics don’t hesitate to contact us.</p>
                    </div>
                    
                </div>
            </div>
        </footer>
    @endif
@endauth

@auth
    @if (Auth::user()->language == 2)
        <div class="home_company">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
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
                <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Selanjutnya</span>
                </button>
            </div>
            <div style="width:90%;margin-left:auto;margin-right:auto;z-index:2;">
                <p class="tulisan_company">PERUSAHAAN</p>
            </div>
            <div style="margin-top:-130px;" class="company_box">
                <div class="home_company_section">
                    <div class="deskripsi_company1"> 
                        <p style="font-size:25px;text-align:start;">JAYAMAS ABADI mulai beroperasi pada tahun 1999.
                            Bisnis ini dimulai dari awal sebagai transporter yang melayani di kota,
                            dan kemudian mulai berkembang dengan melayani JABODETABEK pada tahun 2002.
                            Respon yang luar biasa dari pelanggan kami membuat kami lebih percaya diri untuk
                            mampu menambah unit dan mampu menyediakan outbound domestik
                            Transportasi. Saat ini kami telah melayani transportasi
                            di luar Jawa, yaitu Sumatera, Kalimantan, serta beberapa
                            destinasi di Indonesia Timur.
                        </p>
                        <img src="{{asset('app/assets/image/image 11.png')}}" style="width:549px;height:411px;"alt="">              
                    </div>
                    <p class="deskripsi_company2">Saat ini, PT JAYAMAS ABADI berkembang dengan membuka usaha baru
                        di bidang Forwarder dengan nama PT. INDOTRANS JAYAMAS
                        ABADI. Dengan dukungan tim yang solid dan penerapan
                        teknologi yang tepat dalam mengelola bisnis yang dipercayakan kepada kami, kami
                        yakin bahwa kami akan dapat memberikan kepuasan layanan kepada kami
                        pelanggan dan mewujudkan MISI dan VISI PERUSAHAAN
                        Tepat.
                    </p>
                </div>
                <div class="more">
                    <hr style="margin-top:auto;margin-bottom:auto;margin-left:20px;"/><p style="margin-left:auto;margin-right:auto;font-size:30px;" class="my-auto">LEBIH BANYAK</p><hr style="margin-top:auto;margin-bottom:auto;margin-right:20px;"/>
                </div>
        
                <div class="home_after_more">
                    <div class="home_after_more_card">
                        <img src="{{asset('app/assets/image/visi misi.png')}}" style="width:300px;padding-top:50px;padding-bottom:50px;">
                        <div style="padding-top:50px;padding-bottom:50px;">
                            <p>Visi & <br>Misi</p>
                            <button class="button_more"><p style="margin-top: auto;margin-bottom:auto;">GO</p></button>
                        </div>
                    </div>
                    <div class="home_after_more_card">
                        <img src="{{asset('app/assets/image/about_us.png')}}" style="width:300px;padding-top:50px;padding-bottom:50px;">
                        <div style="padding-top:50px;padding-bottom:50px;">
                            <p>Tentang<br>Kami</p>
                            <button class="button_more"><p style="margin-bottom:auto;">CHECK</p></button>
                        </div>
                    </div>
                    <div class="home_after_more_services"  style="grid-column:span 2;gap:50px;">
                        <img src="{{asset('app/assets/image/service.png')}}" style="width:300px;padding-top:50px;padding-bottom:50px;">
                        <div style="padding-top:50px;padding-bottom:50px;">
                            <p>Layanan</p>
                            <p  style="font-size:28px;" class="deskripsi_pesanan">Ingin melakukan pemesanan jasa pengantaran barang secara domestik <br> ataupun ekspor dan impor? <br> Melalui jalur apapun?
                                PT Indotrans Jayamas Abadi <br> menjadi pilihan yang  tepat. </p>
                            <div style="display:flex; gap:3rem;" class="service_button">
                                <p style="font-size:28px;" class="silahkan_pesan">Silahkan Lakukan Pemesanan</p><button class="button_more"><p style="margin-bottom:auto;">GO</p></button>
                            </div>
            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="d-flex gap-5" style="margin-top:80px"> 
            <hr class="flex-grow-1 my-auto" style="height:5px;color:#011D83;opacity:1;background-color:#011D83;"/><p style="font-size:40px;color:#011D83;font-weight:900" class="get_more_info">GET MORE INFORMATION</p>
        </div>
        <footer style="background-color:#DCEBFF;margin-top:-2.5rem" class="pt-5">
            <div class="footer_content">
                <div class="footer_left flex-grow-1 gap-5 pt-5">
                    <div class="contact_us">
                        <p style="font-weight:bold;font-size:32px;" class="text_big">Contact Us</p>
                        <div class="d-flex mt-3 gap-3">
                            <img src="{{asset('app/assets/image/whatsapp.png')}}" class="contact_img" style="width:61px;height:62px;">
                            <div class="contact_list">
                                <p>+6221 8899 2122(Hunting)</p>
                                <p>+6281 1122 6395</p>
                                <p>+6281 1122 6396</p>
                            </div>
                        </div>
                        <div class="d-flex mt-3 gap-3">
                            <img src="{{asset('app/assets/image/email.png')}}" class="contact_img" style="width:61px;height:62px;"/>
                            <div>
                                <p>cs@jayamasabadi.id</p>
                                <p>Sales@jayamasabadi.id</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <b><p style="font-size:24px;" class="text_big">Member of APTRINDO</p></b>
                            <img src="{{asset('app/assets/image/aptrindo.png')}}" class="aptrindo" style="width:125px;height:120.5px;"alt="">
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="our_office" style="font-family: Titillium Web">
                            <p style="font-weight:bold;font-size:32px;" class="text_big">Our Office</p>
                            <p>
                                <b class="text_big">Head Office :</b><br/>
                                Jl. Marunda Makmur No. 1 RT 002 RW 008 <br>
                                Kebon Kelapa Segara Makmur, <br>
                                Taruma Jaya, Bekasi 17211 Indonesia <br>
                            </p>
                            <p>
                                <b class="text_big">Sales / Operational Office : </b>
                                Kirana Commercial Avenue, <br>
                                Bella Terra Lifestyle Center Lt. 1 No. 26 <br>
                                Jl. Boulevard Raya A2 No. 1 Kelapa Gading, Jakarta Utara
                            </p>
                            <p>
                                <b class="text_big">Cilegon Office : </b>
                                Jl. Lingkar Selatan KM.5, <br>
                                Karangasem, Kec. Cibeber, <br>
                                Kota Cilegon, Banten 42426 <br>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="footer_right rounded-circle " style="background-color: white;border:#011D83 solid 20px;width:539px;height:539px;">
                    <div class="p-4 d-flex flex-column">
                        <img src="{{asset('app/assets/image/customer_support.png')}}" class="mx-auto" style="width:150px;height:150px;"alt=""/>
                        <p style="width:439px;font-size:23px;text-align:center;" class="mx-auto">We are always open to answer you, if you have something to tell us, whether it is a question, suggestion or critics don’t hesitate to contact us.</p>
                    </div>
                    
                </div>
            </div>
        </footer>
    @endif
@endauth

@endsection
