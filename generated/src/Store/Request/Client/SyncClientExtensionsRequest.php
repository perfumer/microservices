<?php

namespace Generated\Perfumer\Microservices\Store\Request\Client;

class SyncClientExtensionsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $client = null;

    /**
     * @var string
     */
    public $extensions = null;

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/client/sync';
        $this->_request_method = 'post';
        $this->client = new \Perfumer\Microservices\Undefined();
        $this->extensions = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->client instanceof \Perfumer\Microservices\Undefined) {
            $array['client'] = $this->client;
        }
        if (!$this->extensions instanceof \Perfumer\Microservices\Undefined) {
            $array['extensions'] = $this->extensions;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
