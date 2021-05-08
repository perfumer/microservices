<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class CountRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $recipient = null;

    /**
     * @var array
     */
    public $where = [
    ];

    /**
     * @var array
     */
    public $group = [
    ];

    public function __construct()
    {
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->where = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
    }
}
