<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Subscription;

class SaveSubscriptionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $subscriber_id = null;

    /**
     * @var string
     */
    public $module_id = null;

    public function __construct()
    {
        $this->subscriber_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
    }
}
