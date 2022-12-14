@extends('layouts.halaman')
@section('title','home')
@section('style')
<style>

    /* ini homepage */
    .home_company {
        display:flex;
        flex-direction: column;
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
        margin-bottom: -100px;
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
        margin:83px auto 83px auto;
        text-align:center;
        border-radius:40px;
    }
    .home_after_more {
        width:90%;
        margin-left:auto;
        margin-right:auto;
        display:grid;
        grid-template-columns: 50% 50%;
        gap:50px;
    }
    .home_after_more_services {
        background-color:white;
        border-radius:30px;
        display:grid;
        grid-template-columns: 30% 70%;
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
        border-top-right-radius: 1000px;
        border-top:#011D83 solid 20px;
        border-right:#011D83 solid 20px;
        background-color: white;
    }
</style>
@endsection
@section('isi')
{{-- <img src="{{asset('app/assets/logo_jayamas.png')}}" /> --}}
<div class="home_company" style="gap:15rem;">
    <div style="height:70%;width:100%;">
        <img src="{{ asset('app/assets/image/shipment.png') }}" style="width:100%;height:70%;position:absolute;z-index:-1;"/><p style="text-align:center;font-family:kanit;font-size:50px;color:#011D83;"><b>More than 15 years of experience in the Forwarding and Inland Transport \Trucking industry</b></p>
    </div>

    <div style="background-color:#B0D1FC">
        <div style="width:90%;margin-left:auto;margin-right:auto;">
            <p class="tulisan_company">COMPANY</p>
        </div>
        <div class="home_company_section">
            <div class="deskripsi_company1"> 
                <p style="font-size:25px;text-align:start;padding-top:39px;">PT. JAYAMAS ABADI started operating in 1999.
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
            <hr style="margin-top:auto;margin-bottom:auto;margin-left:20px;"/><p style="margin-left:auto;margin-right:auto;font-size:60px;">MORE</p><hr style="margin-top:auto;margin-bottom:auto;margin-right:20px;"/>
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
                <img src="{{asset('app/assets/image/services.png')}}" style="width:320px;padding-top:50px;padding-bottom:50px;margin-left:auto;">
                <div style="padding-top:50px;padding-bottom:50px;">
                    <p>SERVICES</p>
                    <p  style="font-size:28px;">Ingin melakukan pemesanan jasa pengantaran barang secara domestik <br> ataupun ekspor dan impor? <br> Melalui jalur apapun?
                        PT Indotrans Jayamas Abadi <br> menjadi pilihan yang  tepat. </p>
                    <div style="display:flex; gap:3rem;">
                        <p style="font-size:28px;">Silahkan Lakukan Pemesanan</p><button class="button_more"><p style="margin-bottom:auto;">GO</p></button>
                    </div>
    
                </div>
            </div>
            
        </div>
    </div>
</div>
<footer style="background-color:#DCEBFF;">
    <div>
        <hr/><p>GET MORE INFORMATION</p>
    </div>
    <div class="footer_content">
        <div class="footer_left flex-grow-1 gap-4">
            <div class="contact_us gap-5">
                <p style="font-weight:bold;font-size:32px;">Contact Us</p>
                <div class="d-flex">
                    <img src="{{asset('app/assets/image/whatsapp.png')}}" style="width:61px;height:62px;">
                    <div>
                        <p>+6221 8899 2122(Hunting)</p>
                        <p>+6281 1122 6395</p>
                        <p>+6281 1122 6396</p>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="{{asset('app/assets/image/email.png')}}" style="width:61px;height:62px;"/>
                    <div>
                        <p>cs@jayamasabadi.id</p>
                        <p>Sales@jayamasabadi.id</p>
                    </div>
                </div>
                <div>
                    <b><p style="font-size:24px;">Member of APTRINDO</p></b>
                    <img src="{{asset('app/assets/image/aptrindo.png')}}" style="width:125px;height:120.5px;"alt="">
                </div>
                
            </div>
        </div>
        <div class="footer-right">
            <div class="our_office">
                <p >Our Office</p>
            </div>
        </div>
        <div class="footer_right rounded-circle" style="background-color: red;width:539px;height:539px;">
            
        </div>
    </div>
    
</footer>

@endsection
