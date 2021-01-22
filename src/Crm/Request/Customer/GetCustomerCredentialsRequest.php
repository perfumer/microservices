<?php

namespace Perfumer\Microservices\Crm\Request\Customer;

use Perfumer\Microservices\Request;

class GetCustomerCredentialsRequest extends Request
{
    /**
     * @var string
     */
    public $iin = null;

    /**
     * @var string
     */
    public $password = null;

    public function __construct()
    {
        $this->iin      = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
    }
}
