<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Module;

class DeleteModuleRoleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module_id = null;

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
        $this->_request_url = '/module-role';
        $this->_request_method = 'delete';
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->role_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
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
