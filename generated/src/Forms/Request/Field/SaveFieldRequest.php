<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Field;

class SaveFieldRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $label = [
    ];

    /**
     * @var array
     */
    public $hint = [
    ];

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $model = null;

    /**
     * @var string
     */
    public $placeholder = null;

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
     * @var bool
     */
    public $is_invisible_for_applicant = null;

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

    /**
     * @var string
     */
    public $aggregation_tag = null;

    /**
     * @var string
     */
    public $aggregation_mode = null;

    /**
     * @var string
     */
    public $alias = null;

    /**
     * @var string
     */
    public $before_text = null;

    /**
     * @var string
     */
    public $after_text = null;

    public function __construct()
    {
        $this->_request_url = '/field';
        $this->_request_method = 'post';
        $this->label = new \Perfumer\Microservices\Undefined();
        $this->hint = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->model = new \Perfumer\Microservices\Undefined();
        $this->placeholder = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->reference = new \Perfumer\Microservices\Undefined();
        $this->is_required = new \Perfumer\Microservices\Undefined();
        $this->is_dedicated = new \Perfumer\Microservices\Undefined();
        $this->is_invisible_for_applicant = new \Perfumer\Microservices\Undefined();
        $this->dedicated_column_index = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->bind_field = new \Perfumer\Microservices\Undefined();
        $this->bind_field_mode = new \Perfumer\Microservices\Undefined();
        $this->aggregation_tag = new \Perfumer\Microservices\Undefined();
        $this->aggregation_mode = new \Perfumer\Microservices\Undefined();
        $this->alias = new \Perfumer\Microservices\Undefined();
        $this->before_text = new \Perfumer\Microservices\Undefined();
        $this->after_text = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->label instanceof \Perfumer\Microservices\Undefined) {
            $array['label'] = $this->label;
        }
        if (!$this->hint instanceof \Perfumer\Microservices\Undefined) {
            $array['hint'] = $this->hint;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->model instanceof \Perfumer\Microservices\Undefined) {
            $array['model'] = $this->model;
        }
        if (!$this->placeholder instanceof \Perfumer\Microservices\Undefined) {
            $array['placeholder'] = $this->placeholder;
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
        if (!$this->is_invisible_for_applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['is_invisible_for_applicant'] = $this->is_invisible_for_applicant;
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
        if (!$this->aggregation_tag instanceof \Perfumer\Microservices\Undefined) {
            $array['aggregation_tag'] = $this->aggregation_tag;
        }
        if (!$this->aggregation_mode instanceof \Perfumer\Microservices\Undefined) {
            $array['aggregation_mode'] = $this->aggregation_mode;
        }
        if (!$this->alias instanceof \Perfumer\Microservices\Undefined) {
            $array['alias'] = $this->alias;
        }
        if (!$this->before_text instanceof \Perfumer\Microservices\Undefined) {
            $array['before_text'] = $this->before_text;
        }
        if (!$this->after_text instanceof \Perfumer\Microservices\Undefined) {
            $array['after_text'] = $this->after_text;
        }

        return $array;
    }
}
