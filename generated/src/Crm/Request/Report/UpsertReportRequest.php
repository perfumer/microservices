<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Report;

class UpsertReportRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $dsl = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var bool
     */
    public $is_protected = null;

    public function __construct()
    {
        $this->_request_url = '/report';
        $this->_request_method = 'put';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->dsl = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->dsl instanceof \Perfumer\Microservices\Undefined) {
            $array['dsl'] = $this->dsl;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }

        return $array;
    }
}
