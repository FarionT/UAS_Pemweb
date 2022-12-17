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

    .party-qty {
        display: flex;
        justify-content: space-between;
    }

    .qty {
        margin-right: 95px;
    }

    .pol-pod {
        display: flex;
        justify-content: space-between;
    }

    .pod {
        margin-right: 95px;
    }

    .trio {
        display: flex;
        justify-content: space-between;
    }

    .sub-logo {
        width: 100px;
    }

    .sub-text {
        font-size: 60px;
    }

    @media screen and (max-width: 1200px) {
        .party-qty {
            display: block;
        }
        .party {
            margin-bottom: 16px;
        }
        .party>p {
            width: 104px;
        }
        .qty>p {
            width: 114px;
        }
        .pol-pod {
            display: block;
        }
        .pol {
            margin-bottom: 16px;
        }
        .pod>p {
            width: 150px;
        }
    }
    @media screen and (max-width: 780px) {
        .trio {
            display: block;
        }

        .sub-logo {
            width: 80px;
        }

        .sub-text {
            font-size: 50px;
        }
    }
    @media screen and (max-width: 780px) {
        .sub-logo {
            width: 60px;
        }

        .sub-text {
            font-size: 40px;
        }
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
<div class="container my-5">
    <form action="/orders" method="post">
        @csrf
        <div class="d-flex justify-content-between mb-5">
            <p style="font-size: 30px;">SI NO: SI-{{ $order->type_id }}-{{ str_pad($order->id,4,'0',STR_PAD_LEFT) }} / IJA / {{ $order->created_at->format('m') }} / {{ $order->created_at->format('Y') }}</p>
            <img src="{{asset('app/assets/image/logo_jayamas.png')}}" style="width: 100px;" />
        </div>
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Shipper</b></p><input disabled type="text" name="shipper" value="{{ $order->shipper }}" style="width: 992px;height: 40px;"/><br />
        </div>
        <div class="d-flex mb-3">
           <p class="jarak"><b>*Consignee</b></p><input disabled type="text" name="consignee" value="{{ $order->consignee }}" style="width: 992px;height: 40px;" /><br />
        </div>
        @if($order->type_id == 'IT' || $order->type_id == 'PC' || $order->type_id == 'ADOM' || $order->type_id == 'ODOM')
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Pickup Address:</b></p><input disabled type="text" name="pickup_add" value="{{ $order->pickup_add }}" style="width: 992px;height: 40px;"/><br />
        </div>
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Delivery Address:</b></p><input disabled type="text" name="delivery_add" value="{{ $order->delivery_add }}" style="width: 992px;height: 40px;" /><br />
        </div>
        @endif
        <div class="d-flex mb-3">
            <p class="jarak"><b>*Notify Party:</b></p> <input disabled type="text" name="notifyparty" value="{{ $order->notifyparty }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <div class="party-qty">
            <div class="d-flex party">
                <p class="jarakexclusive" style="margin-right: 12px;"><b>*Party:</b></p>
                <select disabled name="party" style="width: 200px;height: 40px;">
                    <option value="{{ $order->party }}">{{ $order->party }}</option>
                </select>
            </div>
            <div class="d-flex qty">
                <p class="jarakexclusive"><b>*Qty:</b></p><input disabled type="text" name="qty" value="{{ $order->qty }}" style="width: 200px;height: 40px;" /><br />
            </div>
        </div>
        <br />
        <div class="d-flex stuffingdate">
            <p class="jarakexclusive" style="margin-right: 12px;"><b>*Stuffing Date:</b></p><input disabled type="date" name="stuffing_date" value="{{ $order->stuffing_date }}" style="width: 200px;height: 40px;" /><br />
        </div>
        <br />
        <div class="pol-pod">
            <div class="d-flex pol">
                <p class="jarakexclusive" style="margin-right: 12px;"><b>*Loading Port:</b></p><input disabled type="text" name="pol" value="{{ $order->pol }}" style="width: 350px;height: 40px;" />
            </div>
            <div class="d-flex pod">
                <p class="jarakexclusive"><b>*Destination Port:</b></p><input disabled type="text" name="pod" value="{{ $order->pod }}" style="width: 350px;height: 40px;" /><br />
            </div>
        </div>
        <br />
        <div class="d-flex">
            <p class="jarak"><b>*Vessel:</b></p><input disabled type="text" name="vsl" value="{{ $order->vsl }}" style="width: 992px;height: 40px;" /><br />
        </div>
        <br />
        <div class="d-flex">
            <p class="jarakexclusive" style="margin-right: 12px;"><b>*ETD:</b></p><input disabled type="date" name="etd" value="{{ $order->etd }}" style="width: 200px;height: 40px;" /><br />
        </div>
        <br />
        <hr />
        <div class="notes mt-3">
            <div class="mb-3">
                <b><label for="marking">MARKING</label></b><br />
                <input disabled name="marking" value="{{ $order->marking }}" style="width: 100%;"></input>
            </div>
            <div class="mb-3">
                <b><label for="description">DESCRIPTION</label></b><br />
                <input disabled name="description" value="{{ $order->description }}" style="width: 100%;"></input>
            </div>
            <div class="trio mb-3">
                <!-- <div>
                    <b><label for="qtynote">QUANTITY</label></b><br />
                    <input type="text" name="qtynote" style="width: 200px;height:40px"/>
                </div> -->
                <div>
                    <b><label for="gwnote">G.W (KGS)</label></b><br />
                    <input disabled type="text" name="gw" value="{{ $order->gw }}" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="nwnote">N.W (KGS)</label></b><br />
                    <input disabled type="text" name="nw" value="{{ $order->nw }}" style="width: 200px;height:40px"/>
                </div>
                <div>
                    <b><label for="nwnote">MEAS (CBM)</label></b><br />
                    <input disabled type="text" name="meas" value="{{ $order->meas }}" style="width: 200px;height:40px"/>
                </div>
            </div>
            <div class="mb-3">
                <b><label for="notes">Notes</label></b><br />
                <input disabled name="notes" value="{{ $order->notes }}" style="width: 100%;"></input>
            </div>
        </div>
    </form>
</div>
@endsection