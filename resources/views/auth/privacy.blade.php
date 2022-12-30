@extends('layouts.halaman')
@section('title', 'Privacy')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{
        /* background-color: #B0D1FC !important; */
        background-image: url(" {{ asset('app/assets/image/bg_login.png') }}");
        background-repeat: no-repeat; 
        background-size: 100%;
    }

    .title {
        padding: 10px;
        display: flex;
        justify-content: center;
    }
    .title h1 {
        display: flex;
        align-items: center;
    }
    .title img {
        height: 200px;
    }
    .card {
        background-color: white;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
        max-width: 1000px;
        border: 1px solid black;
        border-radius: 14px;
    }
    .the-title {
        display: flex;
    }
    .the-title h5 {
        font-size: 14px;
        display: flex;
        align-items: center;
    }
    .the-title img {
        height: 80px;
    }
    .card-inside {
        overflow: scroll;
        height: 300px;
        /* background-color: #CFCFCF; */
        border: 1px solid black;
        border-radius: 12px;
        padding: 10px;
    }
    .card-inside p {
        text-align: justify;
        font-size: 14px;
    }
    .card input {
        margin-top: 14px;
    }
    .button {
        display: flex;
        justify-content: center;
        gap: 50px;
    }
    .button button {
        font-family: 'Poppins';
        height: 40px;
        width: 100px;
        border: none;
        border-radius: 10px;
    }
    .button-next {
        background-color: #BBB2B5;
        color: #FFFFFF;
        width: 80px;
    }
    .button-next:hover {
        background-color: #BBB2B5;
        color: #FFFFFF;
    }
    .button-cancel {
        background-color: white;
        color: #2D2CAA;
        width: 80px;
    }
    .button-cancel:hover {
        background-color: white;
    }
</style>
@endsection

@section('isi')
    <div class="title">
        <img src="{{ asset('app/assets/image/profile.png') }}" style="width: 100px; height: auto; margin-right: 20px;">
        <h1>Register</h1>
    </div>
    <div class="card">
        <div class="the-title">
            <img src="{{ asset('app/assets/image/privacy.png') }}" />
            <h5><b>Privacy & Security Policy</b></h5>
        </div>
        <div class="card-inside">
            <p>IDs are granted to the companies listed on a Bill of Lading or contract party for Instant Quotation. To request an ID and Password, please do the following:</p>
            <br />
            <p><b>Step 1.</b>  Read the following on-line "User Indemnity Agreement" and confirm by clicking "I have read, understood and agree to Indemnity Agreement" button.</p>
            <p><b>Step 2.</b> When you accept the agreement, a registration form will appear. Fill out the required information and click the "Submit Request" button.</p>
            <br />
            <p>Please read this agreement carefully and confirm by clicking "I have read, understood and agree to the Indemnity Agreement" button.</p>
            <br />
            <p><b>USER INDEMNITY AGREEMENT</b></p>
            <br />
            <p>Agreement between PT.JayaMasAbadi and the party specified on the registration form.</p>
            <br />
            <p> In consideration of PT.JayaMasAbadi giving User a password ("Password") to enable User to have access to certain confidential shipment information accessible and obtainable via PT.JayaMasAbadi's web site on the Internet ("Information") or on PT.JayaMasAbadi Mobile Application , including but not limited to  quotation,  booking data, freight data, B/L data, and container tracking data with respect to  shipments with PT.JayaMasAbadi, User hereby agrees as follows:</p>
            <br />
            <p><b>1.</b>User shall keep PT.JayaMasAbadi’s Password and all Information with respect to shipments and quotation with PT.JayaMasAbadi confidential, and not reveal them to any third party except PT.JayaMasAbadi’s directors, officers and employees (and, as to Information with respect to particular shipment(s), except broker, forwarder, shipper, consignee and/or notify party of such shipment(s)). We shall further ensure that such directors, officers, and employees keep PT.JayaMasAbadi’s Password and all such Information confidential and not reveal them to any third party.</p>
            <br />
            <p><b>2.</b> Should PT.JayaMasAbadi’s Password and/or any Information with respect to  shipments and quotation with PT.JayaMasAbadi be revealed except as permitted by the preceding paragraph, USER shall promptly notify PT.JayaMasAbadi of such an occurrence and USER shall defend, indemnify and hold PT.JayaMasAbadi harmless from and against any complaint, claim, liability, loss, damage and expense, including attorney's fees, arising out of, or in connection with, such revelation, or any subsequent misuse, alteration, misappropriation, or fraudulent use of such Password and/or Information.</p>
            <br />
            <p><b>3.</b> USER shall not make any attempt to ascertain or obtain a Password assigned to any third party by PT.JayaMasAbadi or to make access to Information with respect to shipments of any third party with PT.JayaMasAbadi by using any Password other than PT.JayaMasAbadi’s Password.</p>
            <br />
            <p><b>4.</b> USER confirms that PT.JayaMasAbadi shall be free of all liability from revealing PT.JayaMasAbadi’s Password, or any Shipment Information including quotation gained through the use of PT.JayaMasAbadi’s Password, by any third party, unless such disclosure was caused by PT.JayaMasAbadi's negligence.</p>
            <br />
            <p><b>5.</b> USER understands that PT.JayaMasAbadi DOES NOT WARRANT OR GUARANTEE that: a. The data on its web site or mobile application is accurate;  b. Access to the web site or mobile application will be uninterrupted; c. The web site or mobile application will not be changed in the future to provide less data, more data or different data; or d. PT.JayaMasAbadi will always maintain a web site or mobile application.</p>
            <br />
            <p><b>6.</b> USER understands that PT.JayaMasAbadi shall have no liability whatsoever, including (without limitation) liability for loss of profit, indirect, special or consequential losses or damages, arising from our use of its web site or mobile application.</p>
            <br />
            <p><b>7.</b> Should USER request print access in addition to the view capabilities granted by this indemnity and print access is granted (at the sole discretion of PT.JayaMasAbadi), the documentation agreement entered would prevail and the indemnity stated herein will be incorporated into the documentation agreement.</p>
            <br />
            <p><b>8.</b> PT.JayaMasAbadi will use information provided by the USER for identification and contact related to its service and applications in order to establish service for the USER. In carrying out its services, PT.JayaMasAbadi may provide information to its agents, group companies, subcontractors or independent contractors to the extent that such information is required for maintenance or service improvements. PT.JayaMasAbadi will do its best to supervise the security management of the aforementiPT.JayaMasAbadid parties in order to safeguard such information. Please see our privacy policy for further details.</p>
        </div>
        <div class="d-flex">
            <input id="detect" value="benar" type="checkbox" class="my-auto me-1">
            <p class="my-auto">I have read, understand, and agreed to the Indemnity Agreement</p>
        </div>
    </div>
    <div class="button">
        <a href="#" id="button-next" class="btn button-next" type="button" disabled>Next</a>
        <a href="/" id="button-cancel" class="btn button-cancel" type="button">Cancel</a>
    </div>
    <script>
        const button = document.querySelector('#detect');
        button.addEventListener('click', (event) => {
            if(button.checked) {
                document.getElementById('button-next').disabled = false;
                document.getElementById('button-next').style.backgroundColor = "#2D2CAA";
                document.getElementById('button-next').style.color = "white";
                document.getElementById('button-next').href = "{{ route('register') }}";
            }
            else {
                document.getElementById('button-next').disabled = true;
                document.getElementById('button-next').style.backgroundColor = "#BBB2B5";
                document.getElementById('button-next').style.color = "#FFFFFF";
                document.getElementById('button-next').href = "#";
            }
        });
    </script>
@endsection