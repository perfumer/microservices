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
        $array = [];
        if (!$this->ip instanceof \Perfumer\Microservices\Undefined) {
            $array['ip'] = $this->ip;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->message instanceof \Perfumer\Microservices\Undefined) {
            $array['message'] = $this->message;
        }
        if (!$this->lifetime instanceof \Perfumer\Microservices\Undefined) {
            $array['lifetime'] = $this->lifetime;
        }
        if (!$array) {
            $array = new \stdClass();
        }

        return $array;
    }
}
