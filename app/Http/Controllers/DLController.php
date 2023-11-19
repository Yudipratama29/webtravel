<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DLController extends Controller
{
    public function index()
    {
        $destination = DB::table('destination')
        ->select("destination.iddst", "destination.name", "destination.location")
        ->get();

        return view('destination.index', ['datadestination' => $destination]);
    }

    public function show($id)
    {
        $destination = DB::table('destination')
        ->select("destination.iddst", "destination.name", "destination.location")
        ->first();

        return view('destination.show', ['datadestination' => $destination]);
    }
}
