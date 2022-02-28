<?php

namespace Generated\Perfumer\Microservices\Crm\Request\UserModule;

class GetUserModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var string
     */
    public $module = null;

    public function __construct()
    {
        $this->_request_url = '/user-module';
        $this->_request_method = 'get';
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }

        return $array;
    }
}
