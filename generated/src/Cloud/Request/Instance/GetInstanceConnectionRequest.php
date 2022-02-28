<?php

namespace Generated\Perfumer\Microservices\Cloud\Request\Instance;

class GetInstanceConnectionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $segment = null;

    public function __construct()
    {
        $this->_request_url = '/instance/connection';
        $this->_request_method = 'get';
        $this->segment = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->segment instanceof \Perfumer\Microservices\Undefined) {
            $array['segment'] = $this->segment;
        }

        return $array;
    }
}
