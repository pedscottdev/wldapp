<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WoodworkingController extends Controller
{
    public function view()
    {
        return view('woodworking.index');
    }

    public function sort()
    {
        return view('woodworking.wood-sorting');
    }

    public function create()
    {
        return view('woodworking.create-drying-kiln');
    }

    public function load()
    {
        return view('woodworking.load-into-kiln');
    }

    public function check()
    {
        return view('woodworking.qc-check');
    }
}
