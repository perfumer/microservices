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
        $this->_request_url = '/records';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipients = new \Perfumer\Microservices\Undefined();
        $this->records = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->recipients instanceof \Perfumer\Microservices\Undefined) {
            $array['recipients'] = $this->recipients;
        }
        if (!$this->records instanceof \Perfumer\Microservices\Undefined) {
            $array['records'] = $this->records;
        }
        if (!$array) {
            $array = new \stdClass();
        }

        return $array;
    }
}
