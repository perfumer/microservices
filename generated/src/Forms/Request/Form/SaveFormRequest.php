<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Form;

class SaveFormRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

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
    public $schema = null;

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
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->schema = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }
}
