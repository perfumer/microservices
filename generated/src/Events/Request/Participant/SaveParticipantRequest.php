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
    public $schedule_id = null;

    /**
     * @var string
     */
    public $customer = null;

    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $opened_at = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var string
     */
    public $nb_invites = null;

    public function __construct()
    {
        $this->_request_url = '/participant';
        $this->_request_method = 'post';
        $this->event_id = new \Perfumer\Microservices\Undefined();
        $this->schedule_id = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->event_id instanceof \Perfumer\Microservices\Undefined) {
            $array['event_id'] = $this->event_id;
        }
        if (!$this->schedule_id instanceof \Perfumer\Microservices\Undefined) {
            $array['schedule_id'] = $this->schedule_id;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->opened_at instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at'] = $this->opened_at;
        }
        if (!$this->closed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at'] = $this->closed_at;
        }
        if (!$this->nb_invites instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites'] = $this->nb_invites;
        }

        return $array;
    }
}
