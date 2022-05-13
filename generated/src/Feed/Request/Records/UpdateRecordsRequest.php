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

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/records';
        $this->_request_method = 'patch';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->where = new \Perfumer\Microservices\Undefined();
        $this->set = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->where instanceof \Perfumer\Microservices\Undefined) {
            $array['where'] = $this->where;
        }
        if (!$this->set instanceof \Perfumer\Microservices\Undefined) {
            $array['set'] = $this->set;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
