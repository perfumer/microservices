<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Forms;

class GetTicketFormsRequest extends \Perfumer\Microservices\Request
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

    /**
     * @var int
     */
    public $count = null;

    public function __construct()
    {
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->form = new \Perfumer\Microservices\Undefined();
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}