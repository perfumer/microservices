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

    public function __construct()
    {
        $this->_request_url = '/target';
        $this->_request_method = 'get';
        $this->channel = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
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

        return $array;
    }
}
