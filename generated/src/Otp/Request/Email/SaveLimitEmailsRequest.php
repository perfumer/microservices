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
        $this->ips = new \Perfumer\Microservices\Undefined();
        $this->emails = new \Perfumer\Microservices\Undefined();
    }
}
