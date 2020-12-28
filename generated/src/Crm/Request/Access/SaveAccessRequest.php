<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Access;

class SaveAccessRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $role = null;

    /**
     * @var string
     */
    public $group = null;

    /**
     * @var array
     */
    public $permissions = [
    ];

    public function __construct()
    {
        $this->role = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->permissions = new \Perfumer\Microservices\Undefined();
    }
}
