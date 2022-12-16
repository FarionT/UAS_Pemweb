<!DOCTYPE html>
<html>
<head>
    <title>Approvement Account</title>
</head>
<body>
    <h1>Account anda sudah di approve</h1>
    <p>Username: {{ $mailData['username'] }}</p>
    <p>Nama Lengkap: {{ $mailData['firstname'] }} {{ $mailData['lastname'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Email Company: {{ $mailData['emailcompany'] }}</p>
    <p>Nomor Telepon: {{ $mailData['notelp'] }}</p>
    <p>NPWP: {{ $mailData['npwp'] }}</p>
    <p>NIB: {{ $mailData['nib'] }}</p>

    <p>Anda sudah dapat menggunakan layanan di website <b>jayamasabadi.com</b></p>
</body>
</html>