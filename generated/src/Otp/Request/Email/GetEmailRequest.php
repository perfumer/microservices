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
        $this->_request_url = '/email/check';
        $this->_request_method = 'get';
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'email' => $this->email,
        'password' => $this->password,
        ];
    }
}
