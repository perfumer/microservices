<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Sms;

class GetSmsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $password = null;

    public function __construct()
    {
        $this->_request_url = '/sms/check';
        $this->_request_method = 'get';
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$array) {
            $array = new \stdClass();
        }

        return $array;
    }
}
