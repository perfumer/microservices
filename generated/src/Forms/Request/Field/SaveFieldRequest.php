<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Field;

class SaveFieldRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $label = null;

    /**
     * @var string
     */
    public $model = null;

    /**
     * @var string
     */
    public $new_model = null;

    /**
     * @var string
     */
    public $module = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->label = new \Perfumer\Microservices\Undefined();
        $this->model = new \Perfumer\Microservices\Undefined();
        $this->new_model = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
    }
}
