<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Table;

class GetTableSettingsRequest extends \Perfumer\Microservices\Request
{
    public function __construct()
    {
        $this->_request_url = '/table/settings';
        $this->_request_method = 'get';
    }

    public function getBody(): array
    {
        $array = [];

        return $array;
    }
}
