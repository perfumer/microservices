<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Condition;

class DeleteTriggerConditionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/trigger/condition';
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
