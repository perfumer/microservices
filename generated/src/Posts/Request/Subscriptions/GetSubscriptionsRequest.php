<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Subscriptions;

class GetSubscriptionsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $subscriber_id = null;

    /**
     * @var string
     */
    public $module_id = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    /**
     * @var string
     */
    public $order_field = null;

    /**
     * @var string
     */
    public $order_direction = null;

    public function __construct()
    {
        $this->subscriber_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
    }
}
