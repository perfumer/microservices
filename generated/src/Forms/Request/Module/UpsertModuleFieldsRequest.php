<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Module;

class UpsertModuleFieldsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module;

    /**
     * @var array
     */
    public $fields = [
    ];

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/module/fields';
        $this->_request_method = 'put';
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
