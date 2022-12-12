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
        background-color: #B0D1FC;
    }

    form {
        background-color: white;
        border-radius: 20px;
        box-shadow: 15px 10px #001560;
        padding: 30px;
    }
    
    .jarak {
        width: 150px;
    }

    .jarakexclusive{
        width: 138px;
    }
</style>
@endsection
@section('isi')
<div class="container">
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
        <table border="1" style="width: 500px;">
            <tr>
                <th style="width: 150px;">Marking</th>
                <th>QTY</th>
                <th>DESCRIPTION</th>
                <th>G.W (KGS)</th>
                <th>N.W (KGS)</th>
                <th>MEAS (CBM)</th>
            </tr>
            <tr>
                <td><input type="textarea" name="markingcol" style="width: 150px;"/></td>
                <td><input type="textarea" name="qtycol" style="width: 100px;"/></td>
                <td><input type="textarea" name="desccol" style="width: 250px;"/></td>
                <td><input type="textarea" name="gwcol" style="width: 150px;"/></td>
                <td><input type="textarea" name="nwcol" style="width: 150px;"/></td>
                <td><input type="textarea" name="meascol" style="width: 240px;"/></td>
            </tr>
        </table>
        <br />
        <button type="submit">Submit</button>
    </form>
</div>
@endsection