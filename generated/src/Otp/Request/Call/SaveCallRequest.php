<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Call;

class SaveCallRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $lifetime;

    public function __construct()
    {
        $this->_request_url = '/call';
        $this->_request_method = 'post';
        $this->ip = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->lifetime = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->ip instanceof \Perfumer\Microservices\Undefined) {
            $array['ip'] = $this->ip;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->lifetime instanceof \Perfumer\Microservices\Undefined) {
            $array['lifetime'] = $this->lifetime;
        }

        return $array;
    }
}
