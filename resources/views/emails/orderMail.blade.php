<!DOCTYPE html>
<html>
<head>
    <title>Order Shipping</title>
</head>
<body>
    <h1>{{ $mailData['username'] }} telah melakukan order</h1>
    <p>Nama Lengkap: {{ $mailData['firstname'] }} {{ $mailData['lastname'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Nomor Telepon: {{ $mailData['notelp'] }}</p>
    <p>NPWP: {{ $mailData['npwp'] }}</p>
    <p>NIB: {{ $mailData['nib'] }}</p>

    <p>Order</p>
    <p>Shipper Company: {{ $mailData['shippercompany'] }}</p>
    <p>Cosignee Company: {{ $mailData['cosigncompany'] }}</p>

    <p>Untuk orderan lebih detail ada pada pdf lampiran dibawah</p>
</body>
</html>