<?php

namespace Geek\Http\Controllers\Service;

use Geek\Http\Controllers\Service\Marvel;

class Personagem extends Marvel
{
    protected $url = 'http://gateway.marvel.com/v1/public/characters';
    
    public function __construct($dado)
    {
        $this->dados = self::searchByName($dado);
    }

    public static function searchByName($name)
    {
        return ['name' => $name];
    }
}