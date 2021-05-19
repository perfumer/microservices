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
        return [
        'collection' => $this->collection,
        'recipient' => $this->recipient,
        'where' => $this->where,
        'group' => $this->group,
        ];
    }
}
