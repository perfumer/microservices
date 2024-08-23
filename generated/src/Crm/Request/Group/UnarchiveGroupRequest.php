<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Group;

class UnarchiveGroupRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/group/archive';
        $this->_request_method = 'delete';
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
