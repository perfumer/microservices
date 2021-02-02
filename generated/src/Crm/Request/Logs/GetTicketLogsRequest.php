<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Logs;

class GetTicketLogsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user_fio = null;

    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $ticket_id = null;

    /**
     * @var string
     */
    public $type = null;

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
    public $close_status = null;

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

    /**
     * @var string
     */
    public $order_field = null;

    /**
     * @var string
     */
    public $order_direction = null;

    public function __construct()
    {
        $this->user_fio = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->close_status = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
    }
}
