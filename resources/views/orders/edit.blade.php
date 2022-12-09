<h1>INI UNTUK EDIT ORDERAN BANG</h1>
<form action="/orders/{{$order->id}}" method="post">
    @csrf
    @method('PUT')
    Shipper <br />
    Company: <input type="text" name="shippercompany" value="{{ old('shippercompany') ?? $order->shippercompany }}"/><br />
    Address:  <input type="text" name="shipperaddress" value="{{ old('shipperaddress') ?? $order->shipperaddress }}"/><br />
    <br />
    Cosignee <br />
    Company: <input type="text" name="cosigncompany" value="{{ old('cosigncompany') ?? $order->cosigncompany }}"/><br />
    Address:  <input type="text" name="cosignaddress" value="{{ old('cosignaddress') ?? $order->cosignaddress }}"/><br />
    <button type="submit">Submit</button>
</form>