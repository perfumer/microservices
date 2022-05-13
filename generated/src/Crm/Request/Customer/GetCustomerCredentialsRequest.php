<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Customer;

class GetCustomerCredentialsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

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

    /**
     * @var string
     */
    public $username = null;

    public function __construct()
    {
        $this->_request_url = '/customer/credentials';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->username = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->iin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin'] = $this->iin;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->username instanceof \Perfumer\Microservices\Undefined) {
            $array['username'] = $this->username;
        }

        return $array;
    }
}
