<?php

namespace Generated\Perfumer\Microservices\Events\Request\Event;

class RejectEventRequest extends \Perfumer\Microservices\Request
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
