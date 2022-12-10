<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shipping Instruction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container mt-5">
        <h1>Shipping Instruction</h1>
        Shipper:<br />
        Company: {{ $order->shippercompany }}<br />
        Address: {{ $order->shipperaddress }}<br />
        <br />
        Cosign:<br />
        Comapny: {{ $order->cosigncompany }}<br />
        Address: {{ $order->cosignaddress }}<br />
        Mantab :0
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>