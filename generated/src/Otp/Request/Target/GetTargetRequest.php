<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Target;

class GetTargetRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $channel = null;

    /**
     * @var string
     */
    public $password = null;

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
        $this->_request_url = '/target';
        $this->_request_method = 'get';
        $this->channel = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->channel instanceof \Perfumer\Microservices\Undefined) {
            $array['channel'] = $this->channel;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
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
