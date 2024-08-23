<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Subscription;

class SaveSubscriptionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $subscriber_id;

    /**
     * @var string
     */
    public $module_id;

    public function __construct()
    {
        $this->_request_url = '/subscription';
        $this->_request_method = 'post';
        $this->subscriber_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->subscriber_id instanceof \Perfumer\Microservices\Undefined) {
            $array['subscriber_id'] = $this->subscriber_id;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }

        return $array;
    }
}
