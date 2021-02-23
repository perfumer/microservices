<?php

namespace Generated\Perfumer\Microservices\Events\Request\Participant;

class UpdateParticipantRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $event_id = null;

    /**
     * @var string
     */
    public $customer_id = null;

    /**
     * @var string
     */
    public $nb_invites = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
    }
}
