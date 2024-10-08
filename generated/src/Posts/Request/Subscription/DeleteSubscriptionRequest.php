<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Subscription;

class DeleteSubscriptionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $subscriber_id;

    /**
     * @var string
     */
    public $module_id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/subscription';
        $this->_request_method = 'delete';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->subscriber_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
