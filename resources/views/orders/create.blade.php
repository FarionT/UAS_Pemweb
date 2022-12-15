@extends('layouts.halaman')
@section('title', 'Shipping Instruction')

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

    .atobtn {
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
        text-decoration: none;
        color: black;
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
        <div class="d-flex justify-content-between mb-5">
            <p style="font-size: 30px;">SI NO: SI-{{ $type_id }}-{{ str_pad($order->id + 1,4,'0',STR_PAD_LEFT) }} / IJA / {{ date('m') }} / {{ date('Y') }}</p>
            <input hidden name="order_date" value="{{ date('Y-m-d') }}" />
            <input hidden name="type_id" value="{{ $type_id }}" />
            <img src="{{asset('app/assets/image/logo_jayamas.png')}}" style="width: 100px;" />
        </div>
        @if($errors)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Shipper</b></p><input type="text" name="shipper" value="{{ old('shipper') }}" style="width: 992px;height: 40px;"/><br />
        </div>
        <div class="d-flex mb-3">
           <p class="jarak"><b>*Consignee</b></p><input type="text" name="consignee" value="{{ old('consignee') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        @if($type_id == 'IT' || $type_id == 'PC' || $type_id == 'ADOM' || $type_id == 'ODOM')
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Pickup Address:</b></p><input type="text" name="pickup_add" value="{{ old('pickup_add') }}" style="width: 992px;height: 40px;"/><br />
        </div>
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Delivery Address:</b></p><input type="text" name="delivery_add" value="{{ old('delivery_add') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        @endif
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Notify Party:</b></p> <input type="text" name="notifyparty" value="{{ old('notifyparty') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p class="jarakexclusive" style="margin-right: 12px;"><b>*Party:</b></p>
                <select name="party" style="width: 200px;height: 40px;">
                    <option value="1X20'">1X20'</option>
                    <option value="1X40'">1X40'</option>
                    <option value="1X40'HC">1X40'HC</option>
                    <option value="1X20'RF">1X20'RF</option>
                    <option value="1X40'RF">1X40'RF</option>
                    <option value="1X20'OT">1X20'OT</option>
                    <option value="1X40'OT">1X40'OT</option>
                    <option value="1X20'FR">1X20'FR</option>
                    <option value="1X40'FR">1X40'FR</option>
                </select>
            </div>
            <div class="d-flex" style="margin-right: 95px;">
                <p class="jarakexclusive"><b>*Qty:</b></p><input type="text" name="qty" value="{{ old('qty') }}" style="width: 200px;height: 40px;" /><br />
            </div>
        </div>
        <br />
        <div class="d-flex">
            <p class="jarakexclusive" style="margin-right: 12px;"><b>*Stuffing Date:</b></p><input type="date" name="stuffing_date" value="{{ old('stuffing_date') }}" style="width: 200px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <p class="jarakexclusive" style="margin-right: 12px;"><b>*Loading Port:</b></p><input type="text" name="pol" value="{{ old('pol') }}" style="width: 350px;height: 40px;" />
            </div>
            <div class="d-flex" style="margin-right: 95px;">
                <p class="jarakexclusive"><b>*Destination Port:</b></p><input type="text" name="pod" value="{{ old('pod') }}" style="width: 350px;height: 40px;" /><br />
            </div>
        </div>
        <br />
        <div class="d-flex">
            <p class="jarak"><b>*Vessel:</b></p><input type="text" name="vsl" value="{{ old('vsl') }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex">
            <p class="jarakexclusive" style="margin-right: 12px;"><b>*ETD:</b></p><input type="date" name="etd" value="{{ old('etd') }}" style="width: 200px;height: 40px;" /><br />
        </div>
        <br />
        <hr />
        <div class="notes mt-3">
            <div class="mb-3">
                <b><label for="marking">MARKING</label></b><br />
                <textarea name="marking" style="width: 100%;"></textarea>
            </div>
            <div class="mb-3">
                <b><label for="description">DESCRIPTION</label></b><br />
                <textarea name="description" style="width: 100%;"></textarea>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <!-- <div>
                    <b><label for="qtynote">QUANTITY</label></b><br />
                    <input type="text" name="qtynote" style="width: 200px;height:40px"/>
                </div> -->
                <div>
                    <b><label for="gwnote">G.W (KGS)</label></b><br />
                    <input type="text" name="gw" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="nwnote">N.W (KGS)</label></b><br />
                    <input type="text" name="nw" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="nwnote">MEAS (CBM)</label></b><br />
                    <input type="text" name="meas" style="width: 200px;height:40px"/>
                </div>
            </div>
            <div class="mb-3">
                <b><label for="notes">Notes</label></b><br />
                <textarea name="notes" style="width: 100%;"></textarea>
            </div>
        </div>
        <br />
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <a href="" class="atobtn clearbutton">Clear</a>
            </div>
            <div class="d-flex">
                <button class="submitbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection