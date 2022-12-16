<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
          crossorigin="anonymous">
    <!-- <style>
        table, th, td {
            border: 1px solid black;
        }
    </style> -->
    <title>Shipping Instruction</title>
</head>
<body>
    <div class="container" style="width:2480px;">
        <p class="text-center" style="font-size: 10px;">{{ $order->pod }}</p>
        <h3 class="text-center" style="font-size: 10px;">SHIPPING INSTRUCTION</h3>
        <p class="text-end" style="font-size: 10px;">{{ $order->order_date }}</p>
        <table class="mx-auto" style="font-size: 10px;">
            <tr><td>SI NO</td><td>:</td><td>SI-{{ $order->type_id }}-{{ str_pad($order->id,4,'0',STR_PAD_LEFT) }} / IJA / {{ $order->created_at->format('m') }} / {{ $order->created_at->format('Y') }}</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>VESSEL</td><td>:</td><td>{{ $order->vsl }}</td></tr>
            <tr><td class="text-end">(ETD)</td><td>:</td><td>{{ $order->etd }}</td></tr>
            <!-- <tr><td class="text-end">(ETA SINGAPORE)</td><td>:</td><td></td></tr> -->
            <!-- <tr><td class="text-end">CONNECTING</td><td>:</td><td></td></tr> -->
            <!-- <tr><td class="text-end">ETD SINGAPORE</td><td>:</td><td></td></tr> -->
            <!-- <tr><td class="text-end">(ETA NEW YORK)</td><td>:</td><td></td></tr> -->
            <!-- <tr><td class="text-end">ETA CHICAGO</td><td></td><td>TBA</td></tr> -->
            <tr><td>PORT OF LOADING</td><td>:</td><td>{{ $order->pol }}</td></tr>
            <tr><td>PORT OF DISCHARGE</td><td>:</td><td>{{ $order->pod }}</td></tr>
            @if($order->type_id == 'IT' || $order->type_id == 'PC' || $order->type_id == 'ADOM' || $order->type_id == 'ODOM')
            <tr><td>PICKUP ADDRESS</td><td>:</td><td>{{ $order->pickup_add }}</td></tr>
            <tr><td>DELIVERY ADDRESS</td><td>:</td><td>{{ $order->delivery_add }}</td></tr>
            @endif
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>SHIPPER</td><td>:</td><td style="width: 450px;">{{ $order->shipper }}</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>CONSIGNEE</td><td>:</td><td style="width: 450px;">{{ $order->consignee }}</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>NOTIFY PARTY</td><td>:</td><td>{{ $order->notifyparty }}</td></tr>
            <tr><td>DESCRIPTION OF GOODS</td><td>:</td><td>
                {{ $order->description }}
                <!-- SAID TO CONTAIN<br />
                1X40HQ<br />
                <br />
                22 PACKAGES OF<br />
                34,920 PCS OF COVERING OF<br />
                OUTER SKIN MID AND O/S ARM REST OF CARESEAT><br />
                <br />
                STYLE NO.<br />
                AS PER INVOICE.: 22001311<br />
                L/C NO : 032LCJ-67290191 -->
            </td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>MARKS & NOS.</td><td>:</td><td>{{ $order->marking }}</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr><td>TOTAL GROSS WEIGHT</td><td>:</td><td>{{ $order->gw }} KGS</td></tr>
            <tr><td>TOTAL NETT WEIGHT</td><td>:</td><td>{{ $order->nw }} KGS</td></tr>
            <tr><td>TOTAL MEASURMENT</td><td>:</td><td>{{ $order->meas }} CBM</td></tr>
            <!-- <tr><td>B/L FORM</td><td>:</td><td>SEAWAY BILL</td></tr>
            <tr><td>PLACE OF ISSUE</td><td>:</td><td>JAKARTA</td></tr>
            <tr><td>FREIGHT</td><td>:</td><td>PREPAID</td></tr>
            <tr><td>CONTAINER NO / SEAL</td><td>:</td><td></td></tr> -->
        </table>
        <!-- <table border="2" class="mx-auto" style="font-size: 10px;">
            <tr><td style="width: 183.65px;">PEB NO</td><td style="width: 7.39px;">:</td><td style="width: 350px;"></td></tr>
            <tr><td>DATE</td><td>:</td><td></td></tr>
            <tr><td>KPBC</td><td>:</td><td>040300</td></tr>
        </table> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
            crossorigin="anonymous">
    </script>
</body>
</html>