<?php

namespace Perfumer\Microservices\Feed;

use Perfumer\Microservices\Request;
use Perfumer\Microservices\Response;

class Feed extends \Generated\Perfumer\Microservices\Feed\Feed
{
    protected bool $dummy;

    public function __construct($host, ?bool $dummy = false)
    {
        $this->host = $host;

        $this->dummy = (bool) $dummy;
    }

    protected function doRequest(Request $request, Response $response): Response
    {
        if($this->dummy){
            return $response;
        }

        return parent::doRequest($request, $response);
    }
}
