<!DOCTYPE html>
<html>
<head>
    <title>Approvement Order</title>
</head>
<body>
    <h1>Order {{ $mailData['username'] }} telah diapprove</h1>
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
</body>
</html>