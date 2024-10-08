<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class CreateRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection;

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

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/records';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipients = new \Perfumer\Microservices\Undefined();
        $this->records = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
