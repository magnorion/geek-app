<?php

namespace Geek\Http\Controllers;

use Illuminate\Http\Request;
use Geek\Http\Controllers\Service\Personagem;

class Home extends Controller
{
    public function index()
    {
        $app = new Personagem('spiderman');
        dd($app->search());

        //return view('home');
    }
}
