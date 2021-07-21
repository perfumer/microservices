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
        $this->_request_url = '/records/count';
        $this->_request_method = 'get';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->recipient = new \Perfumer\Microservices\Undefined();
        $this->where = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->recipient instanceof \Perfumer\Microservices\Undefined) {
            $array['recipient'] = $this->recipient;
        }
        if (!$this->where instanceof \Perfumer\Microservices\Undefined) {
            $array['where'] = $this->where;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }

        return $array;
    }
}
