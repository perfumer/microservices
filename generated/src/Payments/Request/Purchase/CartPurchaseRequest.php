<?php

namespace Generated\Perfumer\Microservices\Payments\Request\Purchase;

class CartPurchaseRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $sum;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var bool
     */
    public $init;

    /**
     * @var string
     */
    public $delivery_callback;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/cart';
        $this->_request_method = 'post';
        $this->sum = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->uuid = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->provider = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->init = new \Perfumer\Microservices\Undefined();
        $this->delivery_callback = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->sum instanceof \Perfumer\Microservices\Undefined) {
            $array['sum'] = $this->sum;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->category instanceof \Perfumer\Microservices\Undefined) {
            $array['category'] = $this->category;
        }
        if (!$this->uuid instanceof \Perfumer\Microservices\Undefined) {
            $array['uuid'] = $this->uuid;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->provider instanceof \Perfumer\Microservices\Undefined) {
            $array['provider'] = $this->provider;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->init instanceof \Perfumer\Microservices\Undefined) {
            $array['init'] = $this->init;
        }
        if (!$this->delivery_callback instanceof \Perfumer\Microservices\Undefined) {
            $array['delivery_callback'] = $this->delivery_callback;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
