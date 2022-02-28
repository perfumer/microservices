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
        $this->_request_url = '/access';
        $this->_request_method = 'post';
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->permission_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->role_id instanceof \Perfumer\Microservices\Undefined) {
            $array['role_id'] = $this->role_id;
        }
        if (!$this->group_id instanceof \Perfumer\Microservices\Undefined) {
            $array['group_id'] = $this->group_id;
        }
        if (!$this->permission_id instanceof \Perfumer\Microservices\Undefined) {
            $array['permission_id'] = $this->permission_id;
        }

        return $array;
    }
}
