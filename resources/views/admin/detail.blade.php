@extends('layouts.halaman')
@section('title', 'Detail Account')

@section('style')
    <style>
        body {
            background-color: #B0D1FC;
        }
    </style>
@endsection
@section('isi')
    <div class="container">
        <h1>INI DETAIL</h1>
        <p>{{ $user->firstname }} {{ $user->lastname }}</p>
    </div>
@endsection