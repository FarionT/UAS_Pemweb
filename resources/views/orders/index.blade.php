<!-- <h1>INI SEMUA ORDER</h1>

<a href="/"> Back to Index</a>
<table border="1">
    <tr>
        <th>Shipper Company</th>
        <th>Cosignee Company</th>
        <th>Status</th>
        <th>Tindakan</th>
    </tr>
    @foreach($orders as $order)
    <tr>
        <td>{{ $order->shippercompany }}</td>
        <td>{{ $order->cosigncompany }}</td>
        <td>{{ $order->accept }}</td>
        <td>
            <a href="/orders/{{$order->id}}">Detail</a>
            <a href="/orders/{{$order->id}}/edit">Edit</a>
            <a href="/orders/approve/{{ $order->id }}">Approve</a>
            <form action="/orders/{{$order->id}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table> -->

@extends('layouts.halaman')
@section('title', 'Approve Order')

@section('style')
    <style>
        body {
            background-color: #B0D1FC;
        }

        .box {
            background-color: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 15px 10px #001560;
        }
        @media screen and (max-width:992px) {
            .missing1 {
                display: none;
            }
        }
        @media screen and (max-width:767px) {
            .missing {
                display: none;
            }
        }
        @media screen and (max-width:575px) {
            .label-atas{
                font-size: 14px;
            }
            .ini-input {
                font-size: 12px;
            }
        }
        @media screen and (max-width:400px) {
            .ini-input {
                font-size: 12px;
            }
        }
        @media screen and (max-width:350px) {
            .ini-input {
                font-size: 12px;
            }
        }
        @media screen and (min-width:576px) {
            .label-tabel-atas, .label-tabel-bawah {
                font-size: 10px;
            }
            .ini-input {
                font-size: 12px;
            }
        }
        @media screen and (min-width:767px) {
            .label-tabel-atas, .label-tabel-bawah {
                font-size: 12px;
            }
            .label-atas {
                font-size: 15px;
            }
            .ini-input {
                font-size: 13px;
            }
        }
        @media screen and (min-width:992px) {
            .label-atas {
                font-size: 16px;
            }
            .ini-input {
                font-size: 14px;
            }
        }
        @media screen and (min-width:1200px) {
            .label-atas {
                font-size: 18px;
            }
            .ini-input {
                font-size: 16px;
            }
        }
    </style>
@endsection
@section('isi')
    <div class="container mb-5">
        <div class="d-flex justify-content-center">
            <!-- <img src="{{ asset('app/assets/image/service.png') }}" style="width:100px;" /> -->
            <p class="mx-auto" style="font-size: 60px;">APPROVE ORDER</p>
        </div>
        <div class="box">
            <table class="table table-striped hover table-bordered" id="mydatatable">
                <thead>
                    <tr style="border-bottom: 1px solid black;">
                        <th class="label-atas label-tabel-atas titillium" style="width: auto;"><h3>ID</h3></th>
                        <th class="label-atas label-tabel-atas titillium missing1" style="width: auto;"><h3>Order Date</h3></th>
                        <th class="label-atas label-tabel-atas titillium missing" style="width: auto;"><h3>Shipper</h3></th>
                        <th class="label-atas label-tabel-atas titillium missing" style="width: auto;"><h3>Consignee</h3></th>
                        <th class="label-atas label-tabel-atas titillium" style="width: auto;"><h3>Status</h3></th>
                        <th class="label-atas label-tabel-atas titillium" style="width: auto;"><h3>Tindakan</h3></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td class="ini-input label-tabel-bawah titillium"><h5>{{ $order->id }}</h5></td>
                        <td class="ini-input label-tabel-bawah titillium missing1"><h5>{{ $order->order_date }}</h5></td>
                        <td class="ini-input label-tabel-bawah titillium missing"><h5>{{ $order->shipper }}</h5></td>
                        <td class="ini-input label-tabel-bawah titillium missing"><h5>{{ $order->consignee }}</h5></td>
                        @if( $order->accept == 1 )
                            <td class="ini-input label-tabel-bawah titillium"><h5 style="color: green;">Approved</h5></td>
                        @else
                            <td class="ini-input label-tabel-bawah titillium"><h5>Not Approved</h5></td>
                        @endif
                        <td class="tindakan titillium d-flex">
                            <a href="/orders/{{ $order->id }}" class="btn btn-primary me-3" style="text-decoration: none; color: white;">Detail</a>
                            <a href="/orders/approve/{{ $order->id }}" class="btn btn-primary me-3" style="text-decoration: none; color: white;">Approve</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                <a href="/profile" class="btn" style="text-decoration: none; color: white; border-radius: 50px; width: 180px; background-color: #011D83"><h5 class="mx-auto my-auto">Back</h5></a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>                
    <script>
        $('#mydatatable').DataTable();
    </script>
@endsection