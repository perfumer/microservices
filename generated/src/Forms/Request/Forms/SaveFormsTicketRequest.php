<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class SaveFormsTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var int
     */
    public $ticket_id = null;

    /**
     * @var string
     */
    public $module = null;

    public function __construct()
    {
        $this->_request_url = '/forms/ticket';
        $this->_request_method = 'post';
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }

        return $array;
    }
}
