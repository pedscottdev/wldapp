<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function view()
    {
        return view('users.list');
    }

    public function create()
    {
        return view('users.create');
    }
}


