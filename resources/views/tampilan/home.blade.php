@extends('layouts.halaman')
@section('title','home')
@section('style')
<style>
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
</style>
@endsection
@section('isi')
<?php
@include('navbar.blade.php');
?>
<img src="" alt=""/>
<div style="display:flex;flex-direction:column;">
<div class="home_company" style="gap:15rem;">
    <div style="height:70%;width:100%;">
        <img src="{{ asset('app/assets/shipment.png') }}" style="width:100%;height:70%;position:absolute;z-index:-1;"/><p style="text-align:center;font-family:kanit;font-size:50px;color:#011D83;"><b>More than 15 years of experience in the Forwarding and Inland Transport \Trucking industry</b></p>
    </div>
    <div style="background-color:#B0D1FC">
        <div class="home_company_section">
            <p style="text-align:start;font-size:65px;width:90%;margin-left:auto;margin-right:auto;gap:10%;">COMPANY</p>
            <div style="display:flex;justify-content:center;width:90%;margin-left:auto;margin-right:auto;gap:10%;"> 
                <p style="font-size:25px;text-align:start;">PT. JAYAMAS ABADI started operating in 1999.
                    The business started from scratch as a transporter serving in the city,
                    and then began to grow by serving JABODETABEK in 2002.
                    The great response from our customers made us more confident to
                    be able to add units and be able to provide domestic outbound
                    transportation services. Currently we have served transportation
                    outside Java, namely Sumatra, Kalimantan, as well as several
                    destinations in Eastern Indonesia.
                </p>
                <img src="{{asset('app/assets/image 11.png')}}" style="width:549px;height:411px;"alt="">              
            </div>
            <p style="grid-column:span 2;font-size:25px;text-align:start;width:90%;margin-left:auto;margin-right:auto">Currently, PT. JAYAMAS ABADI developed by opening a new business
                in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                ABADI. With the support of a solid team and the application of the
                right technology in managing the business entrusted to us, we are
                confident that we will be able to provide service satisfaction to our
                customers and realize the CORPORATE MISSION and VISION
                appropriately.
            </p>
        </div>
    </div>
</div>
<div class="more">
    <hr/><p>MORE</p><hr/>
</div>
<div class="vision&mission">
    <div>
        <p>VISION & MISSION</p>
    </div>
</div>
</div>
@endsection
