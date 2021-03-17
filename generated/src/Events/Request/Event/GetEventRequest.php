<?php

namespace Generated\Perfumer\Microservices\Events\Request\Event;

class GetEventRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }
}
