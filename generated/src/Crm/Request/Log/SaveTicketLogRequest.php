<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Log;

class SaveTicketLogRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $ticket_id;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $code;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var bool
     */
    public $is_customer_visible;

    /**
     * @var string
     */
    public $process_scenario;

    public function __construct()
    {
        $this->_request_url = '/ticket/log';
        $this->_request_method = 'post';
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->is_customer_visible = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->is_customer_visible instanceof \Perfumer\Microservices\Undefined) {
            $array['is_customer_visible'] = $this->is_customer_visible;
        }
        if (!$this->process_scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenario'] = $this->process_scenario;
        }

        return $array;
    }
}
