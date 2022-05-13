<?php

namespace Generated\Perfumer\Microservices\Box\Request\Document;

class GetDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
