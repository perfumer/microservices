<?php

namespace Generated\Perfumer\Microservices\Crm\Request\UserRoles;

class GetUserRolesRequest extends \Perfumer\Microservices\Request
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

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    public function __construct()
    {
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
