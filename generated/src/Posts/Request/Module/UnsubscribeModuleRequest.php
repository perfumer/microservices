<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Module;

class UnsubscribeModuleRequest extends \Perfumer\Microservices\Request
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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->subscriber_id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
    }
}
