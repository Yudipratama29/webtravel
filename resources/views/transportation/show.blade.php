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
        <p>ID                  : {{$datatransportation->idtrans}}</p>
        <p>Transportation      : {{$datatransportation->name}}</p>
        <p>Driver              : {{$datatransportation->driver}}</p>
    </div>
@endsection