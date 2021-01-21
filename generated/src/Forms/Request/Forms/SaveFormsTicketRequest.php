<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class SaveFormsTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

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
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }
}
