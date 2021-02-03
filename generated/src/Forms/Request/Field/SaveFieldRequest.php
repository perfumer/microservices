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
     * @var string
     */
    public $model = null;

    /**
     * @var string
     */
    public $module = null;

    public function __construct()
    {
        $this->label = new \Perfumer\Microservices\Undefined();
        $this->model = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }
}
