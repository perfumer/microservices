<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tickets;

class GetFormsTicketsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $form = null;

    /**
     * @var string
     */
    public $category = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    public function __construct()
    {
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->form = new \Perfumer\Microservices\Undefined();
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
    }
}
