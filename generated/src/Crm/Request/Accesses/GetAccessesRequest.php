<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Accesses;

class GetAccessesRequest extends \Perfumer\Microservices\Request
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
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    public function __construct()
    {
        $this->role = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
    }
}