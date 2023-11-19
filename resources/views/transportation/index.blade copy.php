@extends('layout.master')

@section('title', 'Destination List')

@section('breadcrumb')
    <li class="breadcrumb-item active">Transportation</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Transportation</h4>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Transportation</th>
                        <th scope="col">Transportation</th>
                        <th scope="col">Driver</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($destination as $d)
                        <tr>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->location }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-success" href="{{ url('/destination/show' . $d->id ) }}">Show</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
