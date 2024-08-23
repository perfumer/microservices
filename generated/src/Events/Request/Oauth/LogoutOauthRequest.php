<?php

namespace Generated\Perfumer\Microservices\Events\Request\Oauth;

class LogoutOauthRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/oauth/logout';
        $this->_request_method = 'post';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
