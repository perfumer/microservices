<?php

namespace Generated\Perfumer\Microservices\Cloud\Request\Instance;

class GetInstanceConnectionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $segment = null;

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
        $this->_request_url = '/instance/connection';
        $this->_request_method = 'get';
        $this->segment = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->segment instanceof \Perfumer\Microservices\Undefined) {
            $array['segment'] = $this->segment;
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
