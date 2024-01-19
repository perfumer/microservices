<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class GetTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $with_forms;

    public function __construct()
    {
        $this->_request_url = '/ticket';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->with_forms = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->with_forms instanceof \Perfumer\Microservices\Undefined) {
            $array['with_forms'] = $this->with_forms;
        }

        return $array;
    }
}
