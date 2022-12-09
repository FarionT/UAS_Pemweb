<h1>INI DETAIL ORDER</h1>

<a href="{{ url()->previous() }}">Go Back</a><br />
Yang Order: {{ $user->firstname }} {{ $user->lastname }} <br /><br />
Shipper<br />
Company: {{ $order->shippercompany }}<br />
Address: {{ $order->shippercompany }}<br />
<br />
Cosignee<br />
Company: {{ $order->cosigncompany }}<br />
Address: {{ $order->cosigncompany }}<br />

@if ($order->accept == 1)
    Status: Accepted <br />
@elseif ($order->accept == 0)
    Status: Waiting <br />
@endif