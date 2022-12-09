@auth
    <h1>INI SEMUA ORDER DARI AKUN {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
@endauth

<a href="/profile">
    Back to Profile
</a>
<table border="1">
    <tr>
        <th>Shipper Company</th>
        <th>Cosignee Company</th>
        <th>Status</th>
        <th>Tindakan</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>{{ $order->shippercompany }}</td>
        <td>{{ $order->cosigncompany }}</td>
        <td>{{ $order->accept }}</td>
        <td>
            <a href="/orders/{{$order->id}}">Detail</a>
            <a href="/orders/{{$order->id}}/edit">Edit</a>
            <form action="/orders/{{$order->id}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>