@extends('layouts.halaman')
@section('title', 'Profile')

@section('style')
<style>

    body{background-color: #B0D1FC !important}

    @media only screen and (max-width: 650px) {
        .kotakprofil{
            flex-direction: column;
        }
        /* .biodataSingkat {
            align-items: center;
            display: flex;
        } */
        .form-control {
            width:100%;
            padding-left:16px !important; 
            padding-right: 16px !important;
        }
        .biodataSingkat > form {
            width:94%;
            margin-left: auto;
            margin-right: auto;
        }
    }
    .biodataSingkat {
        width:100%;
    }
    form {
        padding-right:24px;
    }
    .form-control {
        /* width:90 %; */
        padding-left:24px;
    }
    .subjudul {
        position: relative;
        background-color: #011D83;
        border-radius: 40px;
        width: 20%;
        height: 50px;
        margin-left: 105px;
        margin-top: 60px;
        margin-bottom: -20px;
        border-radius: 20px;
        box-shadow: 3px 3px 3px;
        z-index: 1;
    }

    .profilebox {
        background-color: white;
        border-radius: 20px;
        width: 94%;
        height: auto;
        padding: 50px;
        margin-left: 35px;
        margin-top: -5px;
        margin-bottom: 30px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;
    }

    .kotakprofil {
        background-color: #fff;
        border-radius: 30px;
        width:100%;
        height: auto;
        margin-left: 20px;
        margin-bottom: 10px;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil {
        background-color: #fff;
        border-radius: 30px;
        width: 100%;
        height: auto;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 30px;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil p {
        font-size: 25px;
        color: white;
    }

    
    #form-control{
        max-width: 75px;
    }
    /* ini buat tulisan di tengah garis */
    #pembatas span { 
        background: #011D83; 
        padding:0 10px; 

    }

    #pembatas1 {
        background-color: #011D83;
        border-radius: 20px;
        width: 100%;
        height:50px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }
    #pembatas1 p {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid white; 
        line-height: 0.1em;
        margin: 12px 0 12px; 
        color: white;
        font-size: 30px;
    } 
    /* ini buat responsive */
    @media screen and (max-width:575px){
            
    }

    @media screen and (min-width:576px){
        
    }

    @media screen and (min-width:767px){
        
    }

    @media screen and (min-width:992px){
        
    }

    @media screen and (min-width:1200px){
        .judul-atas{
            font-size: 30px;
        }
    }

</style>
@endsection

@section('isi')
    <div class="subjudul d-flex">
        <p class="judul-atas mx-auto my-auto titillium text-white">Profile</p>
    </div>
    <div class="profilebox">
        <div class="kotakprofil d-flex mx-auto flex-row">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <img class="m-3 profile_image" src="{{ asset('app/assets/image/profile.png') }}" style="border:1px solid gray;border-radius:15px;width:250px; height:auto;"/>
                <a href="/" class="titillium tombol d-flex justify-content-center rounded-circle mx-auto " style="background-color:#001560; border:3px solid #001560;  margin-top: -45px; "><img src="{{ asset('app/assets/image/edit.png') }}" style="width:47px; height:47px;"></a>
            </div>
            <div class="biodataSingkat my-auto form-group">
                <form action="" method="post">
                    @csrf
                    <label class="titillium" style="color: #011D83;">Username</label><br/>
                    <input class="titillium form-control" type="text" name="username" id="" value="Ini Username"/><br/>
                    <label class="titillium" style="color: #011D83;">Email</label><br/>
                    <input class="titillium form-control" type="text" name="email" id="" value="Ini Email"/><br/>
                    <label class="titillium" style="color: #011D83">NPWP</label><br/>
                    <input class="titillium form-control" type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                </form>
            </div>
        </div>
        <form action="" enctype="multipart/form-data">
            <div class="">
                
                <div class="mt-5">
                    <div id="pembatas1" class="d-flex justify-content-center">
                        <p id="pembatas" class="judul-atas titillium align-items-center my-auto"><span>Users Profile</span></p>
                    </div>
                </div>
                <div class="userprofil" style="height: 310px;">
                    <div class="biodataSingkat pt-3 form-group form-control-lg">
                        <form action="" method="post" class="mx-auto">
                            @csrf
                            <label style="color: #011D83;">First Name</label><br/>
                            <input class="titillium form-control" type="text" name="username" id="" value="Ini Username"/><br/>
                            <label style="color: #011D83;">Last Name</label><br/>
                            <input class="titillium form-control" type="text" name="email" id="" value="Ini Email"/><br/>
                            <label style="color: #011D83;">Telepon</label><br/>
                            <input class="titillium form-control" type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                        </form>
                    </div>
                </div>
                <div class="mt-5">
                    <div id="pembatas1" class="d-flex justify-content-center">
                        <p id="pembatas" class="align-items-center my-auto"><span>Company Profile</span></p>
                    </div>
                </div>
                <div class="userprofil">
                    <div class="biodataSingkat pt-3 ps-4 form-group form-control-lg">
                        <form action="" method="post">
                            @csrf
                            <label style="color: #011D83;">Company Name</label><br/>
                            <input class="form-control" type="text" name="username" id="" value="Ini Username"/><br/>
                            <label style="color: #011D83;">Country/District</label><br/>
                            <input class="form-control" type="text" name="email" id="" value="Ini Email"/><br/>
                            <label style="color: #011D83;">City</label><br/>
                            <input class="form-control" type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                            <label style="color: #011D83;">Address</label><br/>
                            <input class="form-control" type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                            <label style="color: #011D83;">NIB</label><br/>
                            <input class="form-control" type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="/web/assets/416c9703/yii.js"></script>
    <script src="/web/assets/e12c4efc/jquery.js"></script>
    <script src="/web/assets/268198b0/js/kv-widgets.js"></script>
    <script src="/web/assets/416c9703/yii.validation.js"></script>
    <script src="/web/assets/b89e3f00/js/bootstrap.js"></script>
    <script src="/web/assets/b55f7612/js/fileinput.js"></script>
@endsection