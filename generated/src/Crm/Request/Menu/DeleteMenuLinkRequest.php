<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Menu;

class DeleteMenuLinkRequest extends \Perfumer\Microservices\Request
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
    public $force;

    public function __construct()
    {
        $this->_request_url = '/menu/link';
        $this->_request_method = 'delete';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->force = new \Perfumer\Microservices\Undefined();
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
        if (!$this->force instanceof \Perfumer\Microservices\Undefined) {
            $array['force'] = $this->force;
        }

        return $array;
    }
}
