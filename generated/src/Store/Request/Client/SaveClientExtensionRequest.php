<?php

namespace Generated\Perfumer\Microservices\Store\Request\Client;

class SaveClientExtensionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $client;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $branch;

    public function __construct()
    {
        $this->_request_url = '/client/extension';
        $this->_request_method = 'post';
        $this->client = new \Perfumer\Microservices\Undefined();
        $this->extension = new \Perfumer\Microservices\Undefined();
        $this->branch = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->client instanceof \Perfumer\Microservices\Undefined) {
            $array['client'] = $this->client;
        }
        if (!$this->extension instanceof \Perfumer\Microservices\Undefined) {
            $array['extension'] = $this->extension;
        }
        if (!$this->branch instanceof \Perfumer\Microservices\Undefined) {
            $array['branch'] = $this->branch;
        }

        return $array;
    }
}
