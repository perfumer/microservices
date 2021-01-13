<?php

namespace Generated\Perfumer\Microservices\Forms\Request\References;

class GetReferencesRequest extends \Perfumer\Microservices\Request
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

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    public function __construct()
    {
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
    }
}
