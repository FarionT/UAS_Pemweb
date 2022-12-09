<h1>INI CREATE ORDERAN SHIPPER BANG</h1>

@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<a href="/">Back to Index</a>
<form action="/orders" method="post">
    @csrf
    Shipper <br />
    Company: <input type="text" name="shippercompany" value="{{ old('shippercompany') }}" /><br />
    Address: <input type="text" name="shipperaddress" value="{{ old('shipperaddress') }}" /><br />
    <br />
    Cosignee <br />
    Company: <input type="text" name="cosigncompany" value="{{ old('cosigncompany') }}" /><br />
    Address: <input type="text" name="cosignaddress" value="{{ old('cosignaddress') }}" /><br />
    <button type="submit">Submit</button>
</form>