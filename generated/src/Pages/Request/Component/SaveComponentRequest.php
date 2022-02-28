<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Component;

class SaveComponentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $json = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $old_module = null;

    /**
     * @var string
     */
    public $old_type = null;

    /**
     * @var bool
     */
    public $is_sub = null;

    /**
     * @var array
     */
    public $parameters = [
    ];

    /**
     * @var array
     */
    public $categories = [
    ];

    public function __construct()
    {
        $this->_request_url = '/component';
        $this->_request_method = 'post';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->old_module = new \Perfumer\Microservices\Undefined();
        $this->old_type = new \Perfumer\Microservices\Undefined();
        $this->is_sub = new \Perfumer\Microservices\Undefined();
        $this->parameters = new \Perfumer\Microservices\Undefined();
        $this->categories = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->json instanceof \Perfumer\Microservices\Undefined) {
            $array['json'] = $this->json;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->old_module instanceof \Perfumer\Microservices\Undefined) {
            $array['old_module'] = $this->old_module;
        }
        if (!$this->old_type instanceof \Perfumer\Microservices\Undefined) {
            $array['old_type'] = $this->old_type;
        }
        if (!$this->is_sub instanceof \Perfumer\Microservices\Undefined) {
            $array['is_sub'] = $this->is_sub;
        }
        if (!$this->parameters instanceof \Perfumer\Microservices\Undefined) {
            $array['parameters'] = $this->parameters;
        }
        if (!$this->categories instanceof \Perfumer\Microservices\Undefined) {
            $array['categories'] = $this->categories;
        }

        return $array;
    }
}
