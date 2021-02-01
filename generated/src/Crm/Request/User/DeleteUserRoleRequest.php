<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class DeleteUserRoleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user_id = null;

    /**
     * @var string
     */
    public $group_id = null;

    /**
     * @var string
     */
    public $role_id = null;

    public function __construct()
    {
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->role_id = new \Perfumer\Microservices\Undefined();
    }
}
