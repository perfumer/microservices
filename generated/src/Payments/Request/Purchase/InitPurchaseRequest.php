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
    public $code;

    public function __construct()
    {
        $this->_request_url = '/purchase';
        $this->_request_method = 'post';
        $this->uuid = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->uuid instanceof \Perfumer\Microservices\Undefined) {
            $array['uuid'] = $this->uuid;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
