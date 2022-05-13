<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Module;

class AddModuleFieldsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module = null;

    /**
     * @var array
     */
    public $fields = [
    ];

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/module/fields';
        $this->_request_method = 'post';
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->fields instanceof \Perfumer\Microservices\Undefined) {
            $array['fields'] = $this->fields;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
