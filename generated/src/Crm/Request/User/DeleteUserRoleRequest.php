<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class DeleteUserRoleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $group_id = null;

    /**
     * @var int
     */
    public $role_id = null;

    public function __construct()
    {
        $this->_request_url = '/user-role';
        $this->_request_method = 'delete';
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->role_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->group_id instanceof \Perfumer\Microservices\Undefined) {
            $array['group_id'] = $this->group_id;
        }
        if (!$this->role_id instanceof \Perfumer\Microservices\Undefined) {
            $array['role_id'] = $this->role_id;
        }

        return $array;
    }
}