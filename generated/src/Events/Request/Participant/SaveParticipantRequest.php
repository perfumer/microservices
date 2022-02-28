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

    /**
     * @var string
     */
    public $nb_invites = null;

    public function __construct()
    {
        $this->_request_url = '/participant';
        $this->_request_method = 'post';
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->event_id instanceof \Perfumer\Microservices\Undefined) {
            $array['event_id'] = $this->event_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->nb_invites instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites'] = $this->nb_invites;
        }

        return $array;
    }
}
