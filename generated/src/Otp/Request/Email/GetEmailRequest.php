<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Email;

class GetEmailRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $password = null;

    public function __construct()
    {
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
    }
}
