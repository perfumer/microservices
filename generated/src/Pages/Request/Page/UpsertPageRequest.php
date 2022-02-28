<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Page;

class UpsertPageRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $address = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var int
     */
    public $module_id = null;

    /**
     * @var int
     */
    public $site_id = null;

    /**
     * @var string
     */
    public $module_code = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    public function __construct()
    {
        $this->_request_url = '/page';
        $this->_request_method = 'put';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->site_id = new \Perfumer\Microservices\Undefined();
        $this->module_code = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->address instanceof \Perfumer\Microservices\Undefined) {
            $array['address'] = $this->address;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->site_id instanceof \Perfumer\Microservices\Undefined) {
            $array['site_id'] = $this->site_id;
        }
        if (!$this->module_code instanceof \Perfumer\Microservices\Undefined) {
            $array['module_code'] = $this->module_code;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }

        return $array;
    }
}
