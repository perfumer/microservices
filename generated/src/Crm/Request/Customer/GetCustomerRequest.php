<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Customer;

class GetCustomerRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

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

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
    }
}
