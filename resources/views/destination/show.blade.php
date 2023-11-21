@extends('layout.master')

@section('title', 'Details Destination')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/destination') }}">Destination</a></li>
    <li class="breadcrumb-item active">Show</li>
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
                <h4 class="card-title">Details Destination</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">ID                  : {{$datadestination->iddst}}</p>
            <p class="card-text">Destination Name    : {{$datadestination->name}}</p>
            <p class="card-text">Location            : {{$datadestination->location}}</p>
        </div>
        <div class="card-body">
            <a class="btn btn-sm btn-danger" href="{{ url('/destination/') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ url('/')}}">Home</a>
        </div>
    </div>
@endsection