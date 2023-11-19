<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DLController extends Controller
{
    public function index()
    {
        $destination = DB::table('destination')
        ->select("iddst", "name", "location")
        ->get();

        return view('destination.index', ['datadestination' => $destination]);
    }

    public function show($id)
    {
        $destination = DB::table('destination')
        ->select("iddst", "name", "location")
        ->get();

        return view('home.index', ['datadestination' => $destination]);
    }
}
