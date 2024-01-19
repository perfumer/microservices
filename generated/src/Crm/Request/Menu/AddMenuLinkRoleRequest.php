<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Menu;

class AddMenuLinkRoleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $link_id;

    /**
     * @var int
     */
    public $group_id;

    /**
     * @var int
     */
    public $role_id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/menu/link-role';
        $this->_request_method = 'post';
        $this->link_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->role_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->link_id instanceof \Perfumer\Microservices\Undefined) {
            $array['link_id'] = $this->link_id;
        }
        if (!$this->group_id instanceof \Perfumer\Microservices\Undefined) {
            $array['group_id'] = $this->group_id;
        }
        if (!$this->role_id instanceof \Perfumer\Microservices\Undefined) {
            $array['role_id'] = $this->role_id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
