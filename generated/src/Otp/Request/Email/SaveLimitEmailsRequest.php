<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Email;

class SaveLimitEmailsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ips = null;

    /**
     * @var string
     */
    public $emails = null;

    public function __construct()
    {
        $this->_request_url = '/limit/emails';
        $this->_request_method = 'post';
        $this->ips = new \Perfumer\Microservices\Undefined();
        $this->emails = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'ips' => $this->ips,
        'emails' => $this->emails,
        ];
    }
}
