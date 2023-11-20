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
                <h4 class="card-title">Details Transportation</h4>
            </div>
        </div>
        <div>
            <p class="card-text">ID Booking             : {{$databook->id}}</p>
            <p class="card-text">Book Name              : {{$databook->bookname}}</p>
            <p class="card-text">Destination            : {{$databook->destination_name}}</p>
            <p class="card-text">transportation         : {{$databook->transportation_transportation}}</p>
            <p class="card-text">Phone                  : {{$databook->phone}}</p>
        </div>
    </div>
@endsection