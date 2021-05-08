<?php

namespace Perfumer\Microservices\Feed;

use Perfumer\Microservices\Response;

class Feed extends \Generated\Perfumer\Microservices\Feed\Feed
{
    protected bool $dummy;

    public function __construct($host, bool $dummy = false)
    {
        $this->host = $host;

        $this->dummy = $dummy;
    }

    protected function doRequest(Response $target_response, $method, $url, $json = null, $debug = false, $timeout = 15): Response
    {
        if($this->dummy){
            return $target_response;
        }

        return parent::doRequest($target_response, $method, $url, $json, $debug, $timeout);
    }
}
