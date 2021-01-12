<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Page;

class CreatePageRequest extends \Perfumer\Microservices\Request
{
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
     * @var string
     */
    public $module_id = null;

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
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->module_code = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }
}
