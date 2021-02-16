<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Component;

class SaveComponentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->old_module = new \Perfumer\Microservices\Undefined();
        $this->old_type = new \Perfumer\Microservices\Undefined();
        $this->is_sub = new \Perfumer\Microservices\Undefined();
        $this->parameters = new \Perfumer\Microservices\Undefined();
        $this->categories = new \Perfumer\Microservices\Undefined();
    }
}
