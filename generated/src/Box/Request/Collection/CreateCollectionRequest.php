<?php

namespace Generated\Perfumer\Microservices\Box\Request\Collection;

class CreateCollectionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $handler = null;

    /**
     * @var bool
     */
    public $is_disabled = null;

    /**
     * @var string
     */
    public $description = null;

    public function __construct()
    {
        $this->_request_url = '/collection';
        $this->_request_method = 'post';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->handler = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->handler instanceof \Perfumer\Microservices\Undefined) {
            $array['handler'] = $this->handler;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }

        return $array;
    }
}