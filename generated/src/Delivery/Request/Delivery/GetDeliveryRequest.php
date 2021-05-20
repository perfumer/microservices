<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Delivery;

class GetDeliveryRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/delivery';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$array) {
            $array = new \stdClass();
        }

        return $array;
    }
}
