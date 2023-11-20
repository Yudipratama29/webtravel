<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $book = DB::table('book')
        ->select("book.id", "book.idbook","book.bookname",'destination_id', "destination.name AS destination_name",'transportation_id', "transportation.transportation AS transportation_transportation", "book.phone")
        ->join('destination', 'destination.id', '=', 'book.destination_id')
        ->join('transportation', 'transportation.id', '=', 'book.transportation_id')
        ->get();

        return view('book.index', ['databook' => $book]);
    }

    public function create()
    {
        $destination = DB::table('destination')->get();
        $transportation = DB::table('transportation')->get();

        return view('book.create', ['datadestination' => $destination, 'datatransportation' => $transportation]);
    }

    public function store(Request $request)
    {
        DB::table('book')->insert([
            'idbook' => $request->idbook,
            'bookname' => $request->bookname,
            'destination_id' => $request->destination,
            'transportation_id' => $request->transportation,
            'phone' => $request->phone,
        ]);

        return redirect(url('/book'));

    }
    public function update(Request $request, $id)
    {
        DB::table('book')
        ->where('id', $id)
        ->update([
            'idbook' => $request->idbook,
            'bookname' => $request->bookname,
            'destination_id' => $request->destination,
            'transportation_id' => $request->transportation,
            'phone' => $request->phone,
        ]);

        return redirect(url('/book'));

    }

    public function destroy( $id)
    {
        DB::table('book')
        ->where('id', $id)
        ->delete();

        return redirect(url('/book'));

    }

    public function edit($id)
    {
        $book = DB::table('book')
        ->select("book.id", "idbook","book.bookname",'destination_id', "destination.name AS destination_name",'transportation_id', "transportation.transportation AS transportation_transportation", "book.phone")
        ->join('destination', 'destination.id', '=', 'book.destination_id')
        ->join('transportation', 'transportation.id', '=', 'book.transportation_id')
        ->where('book.idbook', $id)
        ->first();

        $destination = DB::table('destination')->get();
        $transportation = DB::table('transportation')->get();

        return view('book.edit', ['databook' => $book, 'id' => $id, 'datadestination' => $destination, 'datatransportation' => $transportation]);
    }

    public function show($id)
    {
        $book = DB::table('book')
        ->select("book.id", "book.idbook","book.bookname",'destination_id', "destination.name AS destination_name",'transportation_id', "transportation.transportation AS transportation_transportation", "book.phone")
        ->join('destination', 'destination.id', '=', 'book.destination_id')
        ->join('transportation', 'transportation.id', '=', 'book.transportation_id')
        ->where('book.id', $id)
        ->first();

        $destination = DB::table('destination')->get();
        $transportation = DB::table('transportation')->get();

        return view('book.show', ['databook' => $book, 'id' => $id, 'destination' => $destination, 'transportation' => $transportation]);
    }
}