<?php

namespace Geek\Http\Controllers;

use Illuminate\Http\Request;
use Geek\Http\Controllers\Service\Personagem;

class Heroi extends Controller
{
    public function get(Request $data)
    {
        $app = new Personagem($data->input('nome'));
        return json_encode($app->search());
    }
}
