<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Fields;

class GetFieldsRequest extends \Perfumer\Microservices\Request
{
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
    public $locale = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    public function __construct()
    {
        $this->label = new \Perfumer\Microservices\Undefined();
        $this->model = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
    }
}
