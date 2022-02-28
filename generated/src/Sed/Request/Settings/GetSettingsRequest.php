<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Settings;

class GetSettingsRequest extends \Perfumer\Microservices\Request
{
    public function __construct()
    {
        $this->_request_url = '/settings';
        $this->_request_method = 'get';
    }

    public function getBody(): array
    {
        $array = [];

        return $array;
    }
}
