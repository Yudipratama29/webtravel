@extends('layout.master')

@section('title', 'Ubah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/book') }}">Booking Details</a></li>
    <li class="breadcrumb-item active">Booking Details</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Booking Details</h4>
            </div>
        </div>
        <p>ID Booking       : {{$databook->idbook}}</p>
        <p>Book Name        : {{$databook->bookname}}</p>
        <p>Destination      : {{$databook->destination_name}}</p>
        <p>Transportation   : {{$databook->transportation_name}}</p>
        <p>Phone            : {{$databook->phone}}</p>
    </div>
@endsection