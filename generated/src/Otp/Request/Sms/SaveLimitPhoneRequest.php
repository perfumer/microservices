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
        $this->_request_url = '/limit/sms';
        $this->_request_method = 'post';
        $this->ips = new \Perfumer\Microservices\Undefined();
        $this->phones = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'ips' => $this->ips,
        'phones' => $this->phones,
        ];
    }
}
