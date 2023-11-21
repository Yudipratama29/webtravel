@extends('layout.master')

@section('title', 'Detail Booking')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/book') }}">Booking Details</a></li>
    <li class="breadcrumb-item active">Booking Details</li>
@endsection

@section('content')
    <div class="card">
        <style>
            .card{
                border: 1px;
                padding: 20px;
                margin: 20px;
                border-radius: 8px;
            }

        </style>
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Details Transportation</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">ID Booking             : {{$databook->id}}</p>
            <p class="card-text">Book Name              : {{$databook->bookname}}</p>
            <p class="card-text">Destination            : {{$databook->destination_name}}</p>
            <p class="card-text">transportation         : {{$databook->transportation_transportation}}</p>
            <p class="card-text">Phone                  : {{$databook->phone}}</p>
        </div>
        <div class="card-body">
            <a class="btn btn-sm btn-danger" href="{{ url('/book/') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ url('/')}}">Home</a>
        </div>
    </div>
@endsection