<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Group;

class GetGroupRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}
