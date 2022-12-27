<?php

namespace Generated\Perfumer\Microservices\Events\Request\User;

class AddUserModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    /**
     * @var int
     */
    public $module_id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/user/module';
        $this->_request_method = 'post';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
