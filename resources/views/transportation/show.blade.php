@extends('layout.master')

@section('title', 'Details Transportation')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/transportation') }}">Transportation</a></li>
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
                <h4 class="card-title">Details Transportation</h4>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">ID                  : {{$datatransportation->idtrans}}</p>
            <p class="card-text">Transportation      : {{$datatransportation->transportation}}</p>
            <p class="card-text">Driver              : {{$datatransportation->driver}}</p>
        </div>
        <div class="card-body">
            <a class="btn btn-sm btn-danger" href="{{ url('/transportation/') }}">Back</a>
            <a class="btn btn-sm btn-success" href="{{ url('/')}}">Home</a>
        </div>
    </div>
@endsection