<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Healthcheck;

class GetHealthcheckRequest extends \Perfumer\Microservices\Request
{
    public function __construct()
    {
        $this->_request_url = '/healthcheck';
        $this->_request_method = 'get';
    }

    public function getBody(): array
    {
        $array = [];

        return $array;
    }
}
