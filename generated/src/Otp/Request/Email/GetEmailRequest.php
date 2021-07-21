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
        $array = [];
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }

        return $array;
    }
}
