<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Sms;

class SaveSmsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ip = null;

    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $password = null;

    /**
     * @var string
     */
    public $message = null;

    /**
     * @var string
     */
    public $lifetime = null;

    public function __construct()
    {
        $this->ip = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->message = new \Perfumer\Microservices\Undefined();
        $this->lifetime = new \Perfumer\Microservices\Undefined();
    }
}
