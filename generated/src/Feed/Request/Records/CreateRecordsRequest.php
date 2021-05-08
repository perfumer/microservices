<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class CreateRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var array
     */
    public $recipients = [
    ];

    /**
     * @var array
     */
    public $records = [
    ];

    public function __construct()
    {
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipients = new \Perfumer\Microservices\Undefined();
        $this->records = new \Perfumer\Microservices\Undefined();
    }
}
