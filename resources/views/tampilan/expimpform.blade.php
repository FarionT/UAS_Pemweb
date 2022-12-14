@extends('layouts.halaman')
@section('title', 'Shipping Instruction')
@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
@section('style')
<style>
    body {
        background-color: #B0D1FC !important;
    }

    p{font-family: 'Titillium Web', sans-serif;}

    form {
        background-color: white;
        border-radius: 20px;
        box-shadow: 20px 15px #001560;
        padding: 30px;
    }

    input {
        border-radius: 10px;
        border-color: black;
    }

    select {
        border-radius: 10px;
        border: 1;
        border-width: 2px;
        border-color: black;
    }

    textarea {
        border-radius: 10px;
        border: 1;
        border-width: 2px;  
        border-color: black;
    }
    
    .jarak {
        width: 150px;
    }

    .jarakexclusive{
        width: 138px;
    }

    button {
        padding: 5px 15px;
        border-radius: 50px;
        border-color: black;
        border: 0;
        background-color: white;
        box-shadow: rgb(0 0 0 / 10%) 8px 8px 8px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-size: 15px;
        transition: all .5s ease;
    }   

    .clearbutton:hover {
        letter-spacing: 3px;
        background-color: hsl(0, 100%, 50%);
        color: hsl(0, 0%, 100%);
        box-shadow: rgb(220,20,60) 0px 7px 29px 0px;
    }

    .clearbutton:active {
        letter-spacing: 3px;
        background-color: hsl(0, 100%, 50%);
        color: hsl(0, 0%, 100%);
        box-shadow: rgb(220,20,60) 0px 0px 0px 0px;
        transform: translateY(10px);
        transition: 100ms;
    }

    .submitbutton:hover {
        letter-spacing: 3px;
        background-color: hsl(261deg 80% 48%);
        color: hsl(0, 0%, 100%);
        box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
    }

    .submitbutton:active {
        letter-spacing: 3px;
        background-color: hsl(261deg 80% 48%);
        color: hsl(0, 0%, 100%);
        box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
        transform: translateY(10px);
        transition: 100ms;
    }
</style>
@endsection

@section('isi')
<div class="mt-5 mb-3">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('app/assets/image/shipping.png') }}" style="width:100px;" />
        <p class="align-items-center my-auto" style="font-size: 60px;">Shipping Instruction</p>
    </div>
</div>
<div class="container mt-5">
    <form action="/orders" method="post">
        @csrf
        <div class="d-flex justify-content-between">
            <p style="font-size: 30px;">SI NO: SI-XX-XXXX / XX / XX / 20XX</p>
            <img src="#" />
        </div>
        <p><b>*Shipper:</b></p>
        <div class="d-flex mb-3">
            <p class="jarak">Company</p><input type="text" name="shippercompany" value="{{ old('shippercompany') }}" style="width: 992px;height: 40px;"/><br />
        </div>
        <div class="d-flex">
            <p class="jarak">Address</p><input type="text" name="shipperaddress" value="{{ old('shipperaddress') }}"  style="width: 992px;height: 100px;"/><br />
        </div>
        <br />
        <p><b>*Cosignee:</b></p>
        <div class="d-flex mb-3">
           <p class="jarak">Company</p><input type="text" name="cosigncompany" value="{{ old('cosigncompany') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <div class="d-flex">
           <p class="jarak">Address</p><input type="text" name="cosignaddress" value="{{ old('cosignaddress') }}" style="width: 992px;height: 100px;" /><br />
        </div>
        <br />
        <div class="d-flex">
            <p class="jarak"><b>*Pickup Address:</b></p><input type="text" name="pickupaddress" value="{{ old('pickupaddress') }}" style="width: 992px;height: 40px;"/><br />
        </div>
        <br />
        <div class="d-flex">
            <p class="jarak"><b>*Delivery Address:</b></p><input type="text" name="deliveryaddress" value="{{ old('deliveryaddress') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex">
            <p class="jarak"><b>*Notify Party:</b></p> <input type="text" name="notifyparty" value="{{ old('notifyparty') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p class="jarakexclusive"><b>*Party:</b></p>
                <select name="party" style="width: 200px;height: 40px;">
                    <option value="">AWIKWOK</option>
                    <option value="">AWIKWOK</option>
                    <option value="">AWOKAOWK</option>
                    <option value="">NGIKNGOK</option>
                </select>
            </div>
            <div class="d-flex">
                <p class="jarakexclusive"><b>*Qty:</b></p><input type="text" name="qty" value="{{ old('qty') }}" style="width: 200px;height: 40px;" /><br />
            </div>
        </div>
        <br />
        <div class="d-flex">
            <p class="jarakexclusive"><b>*Stuffing Date:</b></p><input type="date" name="stuffingdate" value="{{ old('stuffingdate') }}" style="width: 200px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p class="jarakexclusive"><b>*Loading Port:</b></p><input type="text" name="loadingport" value="{{ old('loadingport') }}" style="width: 350px;height: 40px;" />
            </div>
            <div class="d-flex">
                <p class="jarakexclusive"><b>*Destination Port:</b></p><input type="text" name="destinationport" value="{{ old('destinationport') }}" style="width: 350px;height: 40px;" /><br />
            </div>
        </div>
        <br />
        <div class="d-flex">
            <p class="jarak"><b>*Vessel:</b></p><input type="text" name="vessel" value="{{ old('vessel') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex">
            <p class="jarakexclusive"><b>*ETD:</b></p><input type="date" name="etd" value="{{ old('etd') }}" style="width: 200px;height: 40px;" /><br />
        </div>
        <br />
        <hr />
        <div class="notes mt-3">
            <div class="d-flex justify-content-between">
                <div>
                    <b><label for="qtynote">QUANTITY</label></b><br />
                    <input type="text" name="qtynote" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="gwnote">G.W (KGS)</label></b><br />
                    <input type="text" name="gwnote" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="nwnote">N.W (KGS)</label></b><br />
                    <input type="text" name="nwnote" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="nwnote">MEAS (CBM)</label></b><br />
                    <input type="text" name="measnote" style="width: 200px;height:40px"/>
                </div>
            </div>
            <div>
                <b><label for="markingnote">MARKING</label></b><br />
                <textarea style="width: 1055px;"></textarea>
            </div>
            <div>
                <b><label for="markingnote">DESCRIPTION</label></b><br />
                <textarea style="width: 1055px;"></textarea>
            </div>
        </div>
        <br />
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <button class="clearbutton" type="submit">Clear</button>
            </div>
            <div class="d-flex">
                <button class="submitbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection