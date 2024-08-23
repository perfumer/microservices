<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Permission;

class DeletePermissionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var bool
     */
    public $force;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/permission';
        $this->_request_method = 'delete';
        $this->force = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->force instanceof \Perfumer\Microservices\Undefined) {
            $array['force'] = $this->force;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
