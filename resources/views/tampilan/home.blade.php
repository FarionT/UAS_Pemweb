<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        @include('navbar.blade.php');
    ?>
    <img src="" alt=""/>
    <div style="display:flex;flex-direction:column;">
        <div class="home_company">
            <img src="{{ asset('app/assets/shipment.png') }}" style="width:100%;"/>
            <p>COMPANY</p>
            <div class="home_company_section">
                <p>PT. JAYAMAS ABADI started operating in 1999.
                    The business started from scratch as a transporter serving in the city,
                    and then began to grow by serving JABODETABEK in 2002.
                    The great response from our customers made us more confident to
                    be able to add units and be able to provide domestic outbound
                    transportation services. Currently we have served transportation
                    outside Java, namely Sumatra, Kalimantan, as well as several
                    destinations in Eastern Indonesia.
                </p>
                <img src="" alt="">
                <p>Currently, PT. JAYAMAS ABADI developed by opening a new business
                    in the field of Forwarders under the name PT. INDOTRANS JAYAMAS
                    ABADI. With the support of a solid team and the application of the
                    right technology in managing the business entrusted to us, we are
                    confident that we will be able to provide service satisfaction to our
                    customers and realize the CORPORATE MISSION and VISION
                    appropriately.</p>
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
    
</body>
</html>