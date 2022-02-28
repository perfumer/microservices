<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Subscription;

class DeleteSubscriptionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

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
        $this->_request_url = '/subscription';
        $this->_request_method = 'delete';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->subscriber_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->subscriber_id instanceof \Perfumer\Microservices\Undefined) {
            $array['subscriber_id'] = $this->subscriber_id;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }

        return $array;
    }
}
