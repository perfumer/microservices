<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class DeleteUserRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}