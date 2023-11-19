@extends('layout.master')

@section('title', 'Show Transportation')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/transportation') }}">Transportation</a></li>
    <li class="breadcrumb-item active">Show</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Details Transportation</h4>
            </div>
        </div>
        <div>
            <p class="card-text">ID                  : {{$datatransportation->idtrans}}</p>
            <p class="card-text">Transportation      : {{$datatransportation->transportation}}</p>
            <p class="card-text">Driver              : {{$datatransportation->driver}}</p>
        </div>
    </div>
@endsection