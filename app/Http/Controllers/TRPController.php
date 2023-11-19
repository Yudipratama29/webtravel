<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TRPController extends Controller
{
    public function index()
    {
        $transportation = DB::table('transportation')
        ->select("transportation.idtrans", "transportation.transportation", "transportation.driver")
        ->get();

        return view('transportation.index', ['datatransportation' => $transportation]);
    }

    public function show($id)
    {
        $transportation = DB::table('transportation')
        ->select("transportation.idtrans", "transportation.transportation", "transportation.driver")
        ->first();

        return view('transportation.show', ['datatransportation' => $transportation]);
    }
}
