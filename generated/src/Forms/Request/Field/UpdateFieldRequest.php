<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Field;

class UpdateFieldRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var array
     */
    public $label = [
    ];

    /**
     * @var string
     */
    public $model = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $reference = null;

    /**
     * @var bool
     */
    public $is_required = null;

    /**
     * @var bool
     */
    public $is_dedicated = null;

    /**
     * @var string
     */
    public $dedicated_column_index = null;

    /**
     * @var int
     */
    public $priority = null;

    /**
     * @var string
     */
    public $bind_field = null;

    /**
     * @var string
     */
    public $bind_field_mode = null;

    public function __construct()
    {
        $this->_request_url = '/field';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->label = new \Perfumer\Microservices\Undefined();
        $this->model = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->reference = new \Perfumer\Microservices\Undefined();
        $this->is_required = new \Perfumer\Microservices\Undefined();
        $this->is_dedicated = new \Perfumer\Microservices\Undefined();
        $this->dedicated_column_index = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->bind_field = new \Perfumer\Microservices\Undefined();
        $this->bind_field_mode = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->label instanceof \Perfumer\Microservices\Undefined) {
            $array['label'] = $this->label;
        }
        if (!$this->model instanceof \Perfumer\Microservices\Undefined) {
            $array['model'] = $this->model;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->reference instanceof \Perfumer\Microservices\Undefined) {
            $array['reference'] = $this->reference;
        }
        if (!$this->is_required instanceof \Perfumer\Microservices\Undefined) {
            $array['is_required'] = $this->is_required;
        }
        if (!$this->is_dedicated instanceof \Perfumer\Microservices\Undefined) {
            $array['is_dedicated'] = $this->is_dedicated;
        }
        if (!$this->dedicated_column_index instanceof \Perfumer\Microservices\Undefined) {
            $array['dedicated_column_index'] = $this->dedicated_column_index;
        }
        if (!$this->priority instanceof \Perfumer\Microservices\Undefined) {
            $array['priority'] = $this->priority;
        }
        if (!$this->bind_field instanceof \Perfumer\Microservices\Undefined) {
            $array['bind_field'] = $this->bind_field;
        }
        if (!$this->bind_field_mode instanceof \Perfumer\Microservices\Undefined) {
            $array['bind_field_mode'] = $this->bind_field_mode;
        }

        return $array;
    }
}
