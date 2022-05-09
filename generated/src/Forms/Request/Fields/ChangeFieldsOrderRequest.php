<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Fields;

class ChangeFieldsOrderRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module = null;

    /**
     * @var array
     */
    public $models = [
    ];

    public function __construct()
    {
        $this->_request_url = '/fields/order';
        $this->_request_method = 'post';
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->models = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->models instanceof \Perfumer\Microservices\Undefined) {
            $array['models'] = $this->models;
        }

        return $array;
    }
}