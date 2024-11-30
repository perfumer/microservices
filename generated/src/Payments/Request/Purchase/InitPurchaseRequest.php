<?php

namespace Generated\Perfumer\Microservices\Payments\Request\Purchase;

class InitPurchaseRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $init_success_url;

    /**
     * @var string
     */
    public $init_failure_url;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/init';
        $this->_request_method = 'post';
        $this->uuid = new \Perfumer\Microservices\Undefined();
        $this->init_success_url = new \Perfumer\Microservices\Undefined();
        $this->init_failure_url = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->uuid instanceof \Perfumer\Microservices\Undefined) {
            $array['uuid'] = $this->uuid;
        }
        if (!$this->init_success_url instanceof \Perfumer\Microservices\Undefined) {
            $array['init_success_url'] = $this->init_success_url;
        }
        if (!$this->init_failure_url instanceof \Perfumer\Microservices\Undefined) {
            $array['init_failure_url'] = $this->init_failure_url;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
