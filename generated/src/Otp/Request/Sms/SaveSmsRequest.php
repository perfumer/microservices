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
        $this->_request_url = '/sms';
        $this->_request_method = 'post';
        $this->ip = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->message = new \Perfumer\Microservices\Undefined();
        $this->lifetime = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'ip' => $this->ip,
        'phone' => $this->phone,
        'password' => $this->password,
        'message' => $this->message,
        'lifetime' => $this->lifetime,
        ];
    }
}
