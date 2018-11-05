<?php
/**
 * Service Marvel
 */

namespace Geek\Http\Controllers\Service;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\ClientException;

class Service
{   
    protected $url = '';

    public function get($query)
    {
        try {
            $client = new Guzzle();

            $request = $client->request(
                'GET', 
                $this->url, 
                ['query' => $query]
            );
            
            return json_decode($request->getBody())->{'data'}->{'results'};
        } catch (ClientException $e) {
            return $e->getResponse();
        }
    }
}