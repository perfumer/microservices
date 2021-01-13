<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Reference;

class SaveReferenceRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    public function __construct()
    {
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }
}
