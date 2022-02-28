<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class CreateUserWorkSessionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    public function __construct()
    {
        $this->_request_url = '/user/work-session';
        $this->_request_method = 'post';
        $this->user = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }

        return $array;
    }
}
