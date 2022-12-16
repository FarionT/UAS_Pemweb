@extends('layouts.halaman')
@section('title', 'Register2')

@section('style')
    <style>
        p{font-family: 'Titillium Web', sans-serif;}
        
        body{
            background-color: #B0D1FC !important;
        }

        #judul>p{
            font-size: 60px;
            font-weight: bold;
        }

        #judul>img{
            width:268px;
            height:auto;
        }

        .kotak {
        background-color: white;
        border-radius: 20px;
        width: 95%;
        height: 400px;
        margin-left: 35px;
        margin-bottom: 30px;
        padding:0px;
        border-radius: 20px;
        box-shadow: 5px 5px 5px;
        }

        #span { 
        background:#B0D1FC; 
        padding:0 10px; 
        }

        #pembatas1 {
        background-color: white;
        border-radius: 20px;
        width: 95%;
        height:50px;
        margin-left: 35px;
        margin-top: 100px;
        margin-bottom: 50px;
        padding:10px;
        display: flex;
        box-shadow: 5px 5px 5px;
    }

    #pembatas1 p {
        width: 100%; 
        text-align: left; 
        border-bottom: 1px solid #000; 
        line-height: 0.1em;
        margin: 12px 0 12px; 
        font-family: 'Titillium Web';
        color: #001560;
        font-size: 30px;
    }
    .tulisan_information {
        text-align:start;
        font-size:45px;
        padding-left:50px;
        margin-left:auto;
        margin-right:auto;
        gap:10%;
    }


    </style>

@section('isi')
<div class="mt-5 mb-10">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('app/assets/image/service.png') }}" style="width:100px;" />
        <p class="align-items-center my-auto" style="font-size: 60px;">REGISTER</p>
    </div>
</div>

<div class="Register d-flex">
    <div class="kotak">
        <div id="pembatas1" class="d-flex justify-content-center">
            <p id="pembatas" class="align-items-center my-auto">Required field is indicated by *</p>
        </div>
        <div id="pembatas1" class="align-items-center my-auto"></div>
        <form>
            <div class="form-group">
                <label for="Company Name">*Company Name</label>
                <input type="name" class="form-control" id="Company Name">
              </div>
              <div class="form-group">
                <label for="Country/District">*Country/District</label>
                <input type="name" class="form-control" id="Country/Distict">
              </div>
              <div class="form-group">
                <label for="City">*City</label>
                <input type="name" class="form-control" id="City">
              </div>
              <div class="form-group">
                <label for="Address">*Address</label>
                <input type="address" class="form-control" id="Address">
              </div>
              <div class="form-group">
                <label for="NPWP">*NPWP</label>
                <input type="number" class="form-control" id="NPWP">
              </div>
              <div class="form-group">
                <label for="NIB">*NIB</label>
                <input type="number" class="form-control" id="NIB">
              </div>
        </form>
        <div id="pembatas1" class="align-items-center my-auto"></div>
        <form>
            <div class="form-group">
                <label for="Username">*Username</label>
                <input type="name" class="form-control" id="Username">
              </div>
              <div class="form-group">
                <label for="FirstName">*First Name</label>
                <input type="name" class="form-control" id="FirstName">
              </div>
              <div class="form-group">
                <label for="LastName">*Last Name</label>
                <input type="name" class="form-control" id="LastName">
              </div>
              <div class="form-group">
                <label for="Email">*E-Mail</label>
                <input type="email" class="form-control" id="Email">
              </div>
              <div class="form-group">
                <label for="Phone">*Phone</label>
                <input type="number" class="form-control" id="Phone">
              </div>
              <div class="form-group">
                <label for="Password">*Password</label>
                <input type="password" class="form-control" id="Password">
              </div>
              <div class="form-group">
                <label for="Confirm Password">*Confirm Password</label>
                <input type="password" class="form-control" id="ConfirmPassword">
              </div>
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="cancel" class="btn btn-primary">Cancel</button>
    </div>
</div>


