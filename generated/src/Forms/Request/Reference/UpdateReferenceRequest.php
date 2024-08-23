<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Reference;

class UpdateReferenceRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $ordering;

    /**
     * @var bool
     */
    public $is_protected;

    /**
     * @var bool
     */
    public $is_external;

    /**
     * @var string
     */
    public $external_url;

    /**
     * @var bool
     */
    public $is_archived;

    public function __construct()
    {
        $this->_request_url = '/reference';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->ordering = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->is_external = new \Perfumer\Microservices\Undefined();
        $this->external_url = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->ordering instanceof \Perfumer\Microservices\Undefined) {
            $array['ordering'] = $this->ordering;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->is_external instanceof \Perfumer\Microservices\Undefined) {
            $array['is_external'] = $this->is_external;
        }
        if (!$this->external_url instanceof \Perfumer\Microservices\Undefined) {
            $array['external_url'] = $this->external_url;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }

        return $array;
    }
}
