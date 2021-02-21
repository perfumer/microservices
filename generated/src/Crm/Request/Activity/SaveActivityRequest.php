<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Activity;

class SaveActivityRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $priority = null;

    /**
     * @var bool
     */
    public $is_forced = null;

    public function __construct()
    {
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->is_forced = new \Perfumer\Microservices\Undefined();
    }
}
