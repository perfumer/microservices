<?php

namespace Generated\Perfumer\Microservices\Store\Request\Client;

class UpgradeClientRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $client = null;

    public function __construct()
    {
        $this->_request_url = '/client/upgrade';
        $this->_request_method = 'post';
        $this->client = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->client instanceof \Perfumer\Microservices\Undefined) {
            $array['client'] = $this->client;
        }

        return $array;
    }
}
