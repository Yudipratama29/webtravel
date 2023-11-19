@extends('layout.master')

@section('title', 'Destination List')

@section('breadcrumb')
    <li class="breadcrumb-item active">Destination List</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Destination List</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Destination</th>
                        <th scope="col">Destination List</th>
                        <th scope="col">Location</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datadestination as $d)
                        <tr>
                            <td>{{ $d->iddst }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->location }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-success" href="{{ url('/destination/show' . $d->iddst ) }}">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
