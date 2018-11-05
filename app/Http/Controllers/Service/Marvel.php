<?php

namespace Geek\Http\Controllers\Service;

use Geek\Http\Controllers\Service\Service;

class Marvel extends Service
{
    protected $tk_public = 'c5d28a173adc7663adb1e8e05646e9e3';
    protected $tk_private = 'f0a9df3a455f56cca0ef500a5c79a66b4f1d0efc';
    protected $ts;

    public function search()
    {
        $query = [
            'ts' => $this->ts,
            'name'=> 'thor',
            'apikey' => $this->tk_public,
            'hash' => md5($this->ts.$this->tk_private.$this->tk_public)
        ];
        $query = array_merge($query, $this->dados);

        dd($this->get($query));
    }
}