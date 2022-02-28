<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Report;

class AddReportRoleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $report_id = null;

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
        $this->_request_url = '/report/role';
        $this->_request_method = 'post';
        $this->report_id = new \Perfumer\Microservices\Undefined();
        $this->group_id = new \Perfumer\Microservices\Undefined();
        $this->role_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->report_id instanceof \Perfumer\Microservices\Undefined) {
            $array['report_id'] = $this->report_id;
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
