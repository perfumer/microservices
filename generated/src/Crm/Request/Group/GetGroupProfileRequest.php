<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Group;

class GetGroupProfileRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/group/profile';
        $this->_request_method = 'get';
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
