<!DOCTYPE html>
<html>
<head>
    <title>Registration Account</title>
</head>
<body>
    <h1>{{ $mailData['username'] }} telah melakukan registrasi</h1>
    <p>Nama Lengkap: {{ $mailData['firstname'] }} {{ $mailData['lastname'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Email Company: {{ $mailData['emailcompany'] }}</p>
    <p>Nomor Telepon: {{ $mailData['notelp'] }}</p>
    <p>NPWP: {{ $mailData['npwp'] }}</p>
    <p>NIB: {{ $mailData['nib'] }}</p>

    <p>Untuk melakukan verifikasi akun silahkan approve di website <b>jayamasabadi.com</b></p>
</body>
</html>