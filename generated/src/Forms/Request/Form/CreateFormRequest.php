<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Form;

class CreateFormRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $silent;

    /**
     * @var int
     */
    public $ticket_id;

    /**
     * @var int
     */
    public $user_id;

    /**
     * @var int
     */
    public $customer_id;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $mix;

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

    /**
     * @var array
     */
    public $tags = [
    ];

    public function __construct()
    {
        $this->_request_url = '/form';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->silent = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->mix = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->silent instanceof \Perfumer\Microservices\Undefined) {
            $array['silent'] = $this->silent;
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
        if (!$this->mix instanceof \Perfumer\Microservices\Undefined) {
            $array['mix'] = $this->mix;
        }
        if (!$this->fields instanceof \Perfumer\Microservices\Undefined) {
            $array['fields'] = $this->fields;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }

        return $array;
    }
}
