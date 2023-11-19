<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $book = DB::table('book')
        ->select("book.idbook","book.bookname", "destination.iddst AS destination_name", "transportation.idtrans AS transportation_name", "phone")
        ->join('destination', 'destination.iddst', '=', 'book.destination_iddst', 'transportation', 'transportation.idtrans', '=', 'book.transportation_idtrans')
        ->get();

        return view('book.index', ['databook' => $mhs]);
    }

    public function create()
    {
        $book = DB::table('book')->get();

        return view('book.create', ['databook' => $book]);
    }

    public function store(Request $request)
    {
        DB::table('book')->insert([
            'idbook' => $request->idbook,
            'bookname' => $request->bookname,
            'destination_iddst' => $request->destination,
            'transportation_idtrans' => $request->transportation,
            'phone' => $request->phone,
        ]);

        return redirect(url('/book'));

    }
    public function update(Request $request, $id)
    {
        DB::table('book')
        ->where('idbook', $id)
        ->update([
            'idbook' => $request->idbook,
            'bookname' => $request->bookname,
            'destination_iddst' => $request->destination,
            'transportation_idtrans' => $request->transportation,
            'phone' => $request->phone,
        ]);

        return redirect(url('/book'));

    }

    public function destroy( $id)
    {
        DB::table('book')
        ->where('idbook', $id)
        ->delete();

        return redirect(url('/book'));

    }

    public function edit($id)
    {
        $book = DB::table('book')
        ->select("book.idbook","book.bookname", "destination.iddst AS destination_name", "transportation.idtrans AS transportation_name", "phone")
        ->join('destination', 'destination.iddst', '=', 'book.destination_iddst', 'transportation', 'transportation.idtrans', '=', 'book.transportation_idtrans')
        ->where('book.idbook', $id)
        ->first();

        $book = DB::table('book')->get();

        return view('mahasiswa.edit', ['data' => $mhs, 'id' => $id, 'jurusan' => $jurusan]);
    }

    public function show($id)
    {
        $mhs = DB::table('book')
        ->select("book.idbook","book.bookname", "destination.iddst AS destination_name", "transportation.idtrans AS transportation_name", "phone")
        ->join('destination', 'destination.iddst', '=', 'book.destination_iddst', 'transportation', 'transportation.idtrans', '=', 'book.transportation_idtrans')
        ->where('book.idbook', $id)
        ->first();

        return view('book.show', ['databook' => $book]);
    }
}