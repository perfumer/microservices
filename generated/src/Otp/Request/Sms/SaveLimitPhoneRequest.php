<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Sms;

class SaveLimitPhoneRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ips = null;

    /**
     * @var string
     */
    public $phones = null;

    public function __construct()
    {
        $this->ips = new \Perfumer\Microservices\Undefined();
        $this->phones = new \Perfumer\Microservices\Undefined();
    }
}
