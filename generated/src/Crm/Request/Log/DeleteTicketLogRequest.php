<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Log;

class DeleteTicketLogRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/ticket/log';
        $this->_request_method = 'delete';
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
