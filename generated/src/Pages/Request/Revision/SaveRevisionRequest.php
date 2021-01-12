<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class SaveRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $page_id = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var array
     */
    public $blocks = [
    ];

    /**
     * @var array
     */
    public $parameters = [
    ];

    /**
     * @var bool
     */
    public $is_archived = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->blocks = new \Perfumer\Microservices\Undefined();
        $this->parameters = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }
}
