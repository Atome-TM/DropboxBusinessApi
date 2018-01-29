<?php

namespace Atome;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

trait RequestTrait
{

    protected function get($endpoint)
    {
        return $this->makeRequest('GET', $endpoint);
    }

    private function makeRequest($method = 'GET', $endpoint, $parameters = [])
    {
        $headers = [
          'Authorization' => 'Bearer ' . $this->apiKey
        ];

        if(!empty($parameters)) {
            $headers['Content-Type'] = 'application/json';
        }

        $request = new Request($method, 'https://api.dropboxapi.com/2' . $endpoint, $headers, \GuzzleHttp\json_encode($parameters));

        $guzzle = new Client();
        $back   = $guzzle->send($request);

        return json_decode((string)$back->getBody());
    }

    protected function post($endpoint, $parameters = [])
    {
        return $this->makeRequest('POST', $endpoint, $parameters);
    }
}