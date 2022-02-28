<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Reference;

class UpsertReferenceRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var bool
     */
    public $is_protected = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    public function __construct()
    {
        $this->_request_url = '/reference';
        $this->_request_method = 'put';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }

        return $array;
    }
}
