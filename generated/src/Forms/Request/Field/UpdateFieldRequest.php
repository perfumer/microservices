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
     * @var bool
     */
    public $is_required = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->label = new \Perfumer\Microservices\Undefined();
        $this->model = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->is_required = new \Perfumer\Microservices\Undefined();
    }
}
