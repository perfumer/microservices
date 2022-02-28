<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Fields;

class GetFieldsRequest extends \Perfumer\Microservices\Request
{
    public function __construct()
    {
        $this->_request_url = '/fields';
        $this->_request_method = 'get';
    }

    public function getBody(): array
    {
        $array = [];

        return $array;
    }
}
