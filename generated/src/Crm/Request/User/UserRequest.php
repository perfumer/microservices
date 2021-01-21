<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class UserRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $iin = null;

    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $password = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}
