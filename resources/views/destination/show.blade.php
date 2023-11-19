@extends('layout.master')

@section('title', 'Show Destination')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/destination') }}">Destination</a></li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Details Destination</h4>
            </div>
            <div class="card-body">
                <p class="card-text">ID                  : {{$datadestination->iddst}}</p>
                <p class="card-text">Destination Name    : {{$datadestination->name}}</p>
                <p class="card-text">Location            : {{$datadestination->location}}</p>
            </div>
        </div>
    </div>
@endsection