<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Delivery;

class DeleteDeliveryRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/delivery';
        $this->_request_method = 'delete';
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'id' => $this->id,
        ];
    }
}
