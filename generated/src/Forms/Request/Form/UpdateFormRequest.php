<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Form;

class UpdateFormRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $ticket_id = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var array
     */
    public $fields = [
    ];

    /**
     * @var array
     */
    public $payload = [
    ];

    public function __construct()
    {
        $this->_request_url = '/form';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->fields instanceof \Perfumer\Microservices\Undefined) {
            $array['fields'] = $this->fields;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }

        return $array;
    }
}
