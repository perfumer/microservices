<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Delivery;

class CancelDeliveryRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
    }
}
