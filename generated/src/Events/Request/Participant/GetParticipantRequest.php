<?php

namespace Generated\Perfumer\Microservices\Events\Request\Participant;

class GetParticipantRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $event_id = null;

    /**
     * @var int
     */
    public $customer_id = null;

    public function __construct()
    {
        $this->_request_url = '/participant';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->event_id instanceof \Perfumer\Microservices\Undefined) {
            $array['event_id'] = $this->event_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }

        return $array;
    }
}
