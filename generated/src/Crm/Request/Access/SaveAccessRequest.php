<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Access;

class SaveAccessRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $role_id = null;

    /**
     * @var string
     */
    public $group_id = null;

    /**
     * @var string
     */
    public $permission_id = null;

    public function __construct()
    {
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->permission_id = new \Perfumer\Microservices\Undefined();
    }
}
