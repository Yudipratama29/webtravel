<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TRPController extends Controller
{
    public function index()
    {
        $destination = DB::table('transportation')
        ->select("idtrans", "transportation", "driver")
        ->get();

        return view('transportation.index', ['datatransportation' => $transportation]);
    }

    public function show($id)
    {
        $destination = DB::table('transportation')
        ->select("idtrans", "transportation", "driver")
        ->get();

        return view('transportation.index', ['datatransportation' => $transportation]);
    }
}
