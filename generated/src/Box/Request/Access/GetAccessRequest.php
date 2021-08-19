<?php

namespace Generated\Perfumer\Microservices\Box\Request\Access;

class GetAccessRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $client = null;

    /**
     * @var int
     */
    public $collection = null;

    public function __construct()
    {
        $this->_request_url = '/access';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->client = new \Perfumer\Microservices\Undefined();
        $this->collection = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->client instanceof \Perfumer\Microservices\Undefined) {
            $array['client'] = $this->client;
        }
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }

        return $array;
    }
}
