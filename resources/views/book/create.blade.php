@extends('layout.master')

@section('title', 'Tambah Mahasiswa')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ url('/book') }}">Booking</a></li>
    <li class="breadcrumb-item active">Create Book</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h4 class="card-title">Create Booking</h4>
            </div>
        </div>
        <form action="{{ url('/book') }}" method="POST">
            <div class="card-body">
                @csrf
                <div>
                    <label class="form-label">ID Booking</label>
                    <input class="form-control" type="text" name="idbook">
                </div>
                <div>
                    <label class="form-label">Book Name</label>
                    <input class="form-control" type="text" name="bookname">
                </div>
                <div>
                    <label class="form-label">Destination</label>
                    <select class="form-select" name="destination">
                        @foreach($datadestination as $d)
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-label">Transportation</label>
                    <select class="form-select" name="transportation">
                        @foreach($datatransportation as $t)
                            <option value="{{ $t->id }}">{{ $t->transportation }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="form-label">Phone</label>
                    <input class="form-control" type="text" name="phone">
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection