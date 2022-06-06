<?php

namespace Perfumer\Microservices\Postgrest;

use Perfumer\Microservices\Response;
use Psr\Http\Message\ResponseInterface;

class Postgrest extends \Generated\Perfumer\Microservices\Postgrest\Postgrest
{
    protected function buildResponseFromGuzzleResponse(Response $response, ?ResponseInterface $guzzle_response): Response
    {
        if ($guzzle_response) {
            $response->_http_status_code = $guzzle_response->getStatusCode();
            $response->_raw = $guzzle_response->getBody()->getContents();

            $response->_status = $guzzle_response->getStatusCode() > 0 && $guzzle_response->getStatusCode() < 400;

            $decoded_response = json_decode($response->_raw, true);
            $response->_content = (array) $decoded_response;
        }

        return $response;
    }
}
