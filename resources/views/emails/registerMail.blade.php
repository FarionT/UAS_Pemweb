<!DOCTYPE html>
<html>
<head>
    <title>Registration Account</title>
</head>
<body>
    <h1>{{ $mailData['username'] }} telah melakukan registrasi</h1>
    <p>Nama Lengkap: {{ $mailData['firstname'] }} {{ $mailData['lastname'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Nomor Telepon: {{ $mailData['notelp'] }}</p>
    <p>Company: {{ $mailData['company'] }}</p>
    <p>Country: {{ $mailData['country'] }}</p>
    <p>City: {{ $mailData['city'] }}</p>
    <p>Address: {{ $mailData['address'] }}</p>
    <p>NPWP: {{ $mailData['npwp'] }}</p>
    <p>NIB: {{ $mailData['nib'] }}</p>

    <p>Untuk melakukan verifikasi akun silahkan approve di website <b>jayamasabadi.com</b></p>
</body>
</html>