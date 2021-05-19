<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Delivery;

class StartDeliveryRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/delivery/start';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'id' => $this->id,
        ];
    }
}
