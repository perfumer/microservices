<?php

namespace Generated\Perfumer\Microservices\Feed\Request\Records;

class UpdateRecordsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var array
     */
    public $where = [
    ];

    /**
     * @var array
     */
    public $set = [
    ];

    public function __construct()
    {
        $this->_request_url = '/records';
        $this->_request_method = 'patch';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->where = new \Perfumer\Microservices\Undefined();
        $this->set = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'collection' => $this->collection,
        'where' => $this->where,
        'set' => $this->set,
        ];
    }
}
