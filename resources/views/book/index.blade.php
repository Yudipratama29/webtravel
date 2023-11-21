@extends('layout.master')

@section('title', 'Booking')

@section('breadcrumb')
    <li class="breadcrumb-item active">Book</li>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h4 class="card-title">Booking List</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-sm btn-primary float-end" href="{{ url('/book/create') }}">Create Book</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Book Name</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Transportation</th>
                        <th scope="col">Phone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($databook as $db)
                        <tr>
                            <td>{{ $db->bookname }}</td>
                            <td>{{ $db->destination_name }}</td>
                            <td>{{ $db->transportation_transportation }}</td>
                            <td>{{ $db->phone }}</td>
                            <td class="float-end">
                                <a class="btn btn-sm btn-success" href="{{ url('/book/' . $db->id ) }}">Show</a>
                                <a class="btn btn-sm btn-warning" href="{{ url('/book/' . $db->id . '/edit') }}">Edit</a>
                                <form style="display: inline;" action="{{ url('/book/' . $db->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
