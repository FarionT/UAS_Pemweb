<!DOCTYPE html>
<html>
<head>
    <title>Order Shipping</title>
</head>
<body>
    <h1>{{ $mailData['username'] }} telah melakukan order</h1>
    <p>Nama Lengkap: {{ $mailData['firstname'] }} {{ $mailData['lastname'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Email Company: {{ $mailData['emailcompany'] }}</p>
    <p>Nomor Telepon: {{ $mailData['notelp'] }}</p>
    <p>NPWP: {{ $mailData['npwp'] }}</p>
    <p>NIB: {{ $mailData['nib'] }}</p>

    <p>Order</p>
    <p>SI NO: SI-{{ $mailData['type_id'] }}-{{ str_pad($mailData['order_id'],4,'0',STR_PAD_LEFT) }} / IJA / {{ $mailData['created_at']->format('m') }} / {{ $mailData['created_at']->format('Y') }}
    <p>Shipper : {{ $mailData['shipper'] }}</p>
    <p>Cosignee : {{ $mailData['consignee'] }}</p>

    <p>Untuk orderan lebih detail ada pada pdf lampiran dibawah</p>
</body>
</html>