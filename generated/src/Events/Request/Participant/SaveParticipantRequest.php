<?php

namespace Generated\Perfumer\Microservices\Events\Request\Participant;

class SaveParticipantRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $event_id = null;

    /**
     * @var string
     */
    public $customer_id = null;

    public function __construct()
    {
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
    }
}
