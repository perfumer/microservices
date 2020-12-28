<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Permission;

class DeletePermissionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}
