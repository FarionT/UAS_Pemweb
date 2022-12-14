@extends('layouts.halaman')
@section('title', 'Profile')

@section('style')
<style>
    p{font-family: 'Titillium Web', sans-serif;}

    body{background-color: #B0D1FC !important}

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
        height: 1600px;
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
        width: 1045px;
        height: 300px;
        margin-left: 20px;
        margin-bottom: 10px;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil {
        background-color: #fff;
        border-radius: 30px;
        width: 1045px;
        height: 300px;
        margin-left: 10px;
        margin-bottom: 30px;
        border-radius: 20px;
        box-shadow: 1px 1px 1px;
        border:2px solid #011D83;
    }

    .userprofil p {
        font-size: 25px;
        color: white;
    }

    #pembatas1 p {
        width: 100%; 
        text-align: center; 
        border-bottom: 1px solid white; 
        line-height: 0.1em;
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        color: white;
        font-size: 30px;
    } 

    #pembatas span { 
        background: #011D83; 
        padding:0 10px; 

    }

    #pembatas1 {
        background-color: #011D83;
        border-radius: 20px;
        width: 1045px;
        height:50px;
        margin-right: auto;
        margin-left: auto;
        margin-top: 50px;
        margin-bottom: 50px;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }
</style>
@endsection

@section('isi')
    <div class="subjudul d-flex">
        <p class="mx-auto my-auto" style="font-size: 30px; color:white;">Profile</p>
    </div>
    <div class="profilebox">
        <div class="iniform">
            <div class="d-flex flex-row">
                <div class="kotakprofil d-flex flex-row">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <img class="m-3" src="{{ asset('app/assets/image/profile.png') }}" style="border:1px solid gray;border-radius:15px;width:250px; height:auto;"/>
                        <a href="/" class="tombol d-flex justify-content-center rounded-circle mx-auto " style="background-color:#001560; border:3px solid #001560;  margin-top: -45px; "><img src="{{ asset('app/assets/image/edit.png') }}" style="width:47px; height:47px;"></a>
                    </div>
                    <div class="biodataSingkat my-auto form-group">
                        <form action="" method="post">
                            @csrf
                            <label style="color: #011D83;">Username</label><br/>
                            <input class="form-control" type="text" name="username" id="" value="Ini Username"/><br/>
                            <label style="color: #011D83;">Email</label><br/>
                            <input class="form-control" type="text" name="email" id="" value="Ini Email"/><br/>
                            <label style="color: #011D83">Telepon</label><br/>
                            <input class="form-control" type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                        </form>
                    </div>
                </div>
            </div>
            <form action="" enctype="multipart/form-data">
                <div class="">
                    
                    <div class="mt-5">
                        <div id="pembatas1" class="d-flex justify-content-center">
                            <p id="pembatas" class="align-items-center my-auto"><span>User Profile</span></p>
                        </div>
                    </div>
                    <div class="userprofil">
                        <div class="biodataSingkat pt-3 ps-4">
                            <form action="" method="post">
                                @csrf
                                <label style="color: #011D83;">Username</label><br/>
                                <input type="text" name="username" id="" value="Ini Username"/><br/>
                                <label style="color: #011D83;">Email</label><br/>
                                <input type="text" name="email" id="" value="Ini Email"/><br/>
                                <label style="color: #011D83;">Telepon</label><br/>
                                <input type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div id="pembatas1" class="d-flex justify-content-center">
                            <p id="pembatas" class="align-items-center my-auto"><span>Company Profile</span></p>
                        </div>
                    </div>
                    <div class="userprofil">
                        <div class="biodataSingkat pt-3 ps-4">
                            <form action="" method="post">
                                @csrf
                                <label style="color: #011D83;">Username</label><br/>
                                <input type="text" name="username" id="" value="Ini Username"/><br/>
                                <label style="color: #011D83;">Email</label><br/>
                                <input type="text" name="email" id="" value="Ini Email"/><br/>
                                <label style="color: #011D83;">Telepon</label><br/>
                                <input type="text" name="telepon" id="" value="Ini Telepon"/><br/>
                            </form>
                        </div>
                    </div>
                </div>
        
                <div>

                </div>
                <div>

                </div>

                <button type="submit" style="margin-top: 100px;">Save</button>
            </form>
        </div>
    </div>
@endsection