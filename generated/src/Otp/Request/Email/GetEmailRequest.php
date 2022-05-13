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

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/email/check';
        $this->_request_method = 'get';
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
