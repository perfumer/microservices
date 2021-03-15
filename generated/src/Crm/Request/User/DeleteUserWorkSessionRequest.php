<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class DeleteUserWorkSessionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    public function __construct()
    {
        $this->user = new \Perfumer\Microservices\Undefined();
    }
}
