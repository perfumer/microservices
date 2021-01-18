<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Logs;

class GetTicketLogsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $form = null;

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
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->form = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
    }
}
