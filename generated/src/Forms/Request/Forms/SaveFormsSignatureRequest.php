<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class SaveFormsSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $signature = null;

    /**
     * @var string
     */
    public $data = null;

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
        $this->signature = new \Perfumer\Microservices\Undefined();
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }
}
