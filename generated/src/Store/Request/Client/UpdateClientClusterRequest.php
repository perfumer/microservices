<?php

namespace Generated\Perfumer\Microservices\Store\Request\Client;

class UpdateClientClusterRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/client/cluster';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->token = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->token instanceof \Perfumer\Microservices\Undefined) {
            $array['token'] = $this->token;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
