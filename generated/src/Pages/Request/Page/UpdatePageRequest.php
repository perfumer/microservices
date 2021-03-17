<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Page;

class UpdatePageRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->site_id = new \Perfumer\Microservices\Undefined();
        $this->module_code = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }
}
