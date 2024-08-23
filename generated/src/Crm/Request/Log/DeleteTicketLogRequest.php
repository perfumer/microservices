<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Log;

class DeleteTicketLogRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/ticket/log';
        $this->_request_method = 'delete';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
