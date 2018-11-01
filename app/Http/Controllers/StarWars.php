<?php

namespace Geek\Http\Controllers;

use Illuminate\Http\Request;

class StarWars extends Controller
{
    public function index()
    {
        return view('starwars');
    }
}
