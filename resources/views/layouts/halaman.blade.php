<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="././css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- ini font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Titillium+Web&display=swap" rel="stylesheet">
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@600&family=Titillium+Web&display=swap'); 
        p{
            font-family: 'Dosis', sans-serif;
            font-family: 'Titillium Web', sans-serif;
        }
    </style>
    @yield('style')
</head>
<style>
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
        display:grid;
        background-color:#011D83;
        grid-template-columns: auto auto auto auto;
    }
</style>
<body>
    <nav class="nav">
        <div class="nav-top">
            <div class="nav-top-left">
                <img src="{{asset('app/assets/logo_jayamas.png')}}" alt=""><p style="margin-top:auto;margin-bottom:auto;font-size:30px;">PT Indotrans Jayamas Abadi</p>
            </div>
            <div class="nav-top-right">
                <p style="margin-top:auto;margin-bottom:auto;font-size:30px;">USER</p>
            </div>
        </div>
        <div class="nav-bottom">
            <p class="my-auto">About Us</p>
            <p class="my-auto">Services</p>
            <p class="my-auto">Vision & Mission</p>
            <p class="my-auto">Language</p>
        </div>
    </nav>
    @yield('isi')  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>