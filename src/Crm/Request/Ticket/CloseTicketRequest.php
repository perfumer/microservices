<?php

namespace Perfumer\Microservices\Crm\Request\Ticket;

use Perfumer\Microservices\Request;

class CloseTicketRequest extends Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}
