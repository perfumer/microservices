<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Customer;

class AddCustomerGroupRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $group;

    public function __construct()
    {
        $this->_request_url = '/customer-group';
        $this->_request_method = 'post';
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }

        return $array;
    }
}
