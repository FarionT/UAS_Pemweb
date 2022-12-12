<!DOCTYPE html>
<html>
<head>
    <title>Approvement Order</title>
</head>
<body>
    <h1>{{ $mailData['username'] }} telah melakukan order</h1>
    <p>Nama Lengkap: {{ $mailData['firstname'] }} {{ $mailData['lastname'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Nomor Telepon: {{ $mailData['notelp'] }}</p>
    <p>NPWP: {{ $mailData['npwp'] }}</p>
    <p>NIB: {{ $mailData['nib'] }}</p>

    <p>Order</p>
    <p>Shipper Company: {{ $mailData['shipper'] }}</p>
    <p>Cosignee Company: {{ $mailData['cosign'] }}</p>

    <p>Untuk orderan lebih detail ada pada pdf lampiran dibawah</p>
</body>
</html>