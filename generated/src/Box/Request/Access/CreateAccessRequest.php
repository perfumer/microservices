<?php

namespace Generated\Perfumer\Microservices\Box\Request\Access;

class CreateAccessRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $client = null;

    /**
     * @var int
     */
    public $collection = null;

    /**
     * @var string
     */
    public $level = null;

    public function __construct()
    {
        $this->_request_url = '/access';
        $this->_request_method = 'post';
        $this->client = new \Perfumer\Microservices\Undefined();
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->level = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->client instanceof \Perfumer\Microservices\Undefined) {
            $array['client'] = $this->client;
        }
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->level instanceof \Perfumer\Microservices\Undefined) {
            $array['level'] = $this->level;
        }

        return $array;
    }
}
