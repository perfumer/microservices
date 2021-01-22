<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Form;

class GetFormRequest extends \Perfumer\Microservices\Request
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

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }
}
