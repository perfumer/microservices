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
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
    }
}
