<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class UpdateRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $where = null;

    /**
     * @var string
     */
    public $set = null;

    public function __construct()
    {
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->where = new \Perfumer\Microservices\Undefined();
        $this->set = new \Perfumer\Microservices\Undefined();
    }
}
