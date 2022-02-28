<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Item;

class CreateItemRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $value = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $reference = null;

    /**
     * @var int
     */
    public $priority = null;

    /**
     * @var array
     */
    public $parents = [
    ];

    /**
     * @var array
     */
    public $children = [
    ];

    public function __construct()
    {
        $this->_request_url = '/item';
        $this->_request_method = 'post';
        $this->value = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->reference = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->value instanceof \Perfumer\Microservices\Undefined) {
            $array['value'] = $this->value;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->reference instanceof \Perfumer\Microservices\Undefined) {
            $array['reference'] = $this->reference;
        }
        if (!$this->priority instanceof \Perfumer\Microservices\Undefined) {
            $array['priority'] = $this->priority;
        }
        if (!$this->parents instanceof \Perfumer\Microservices\Undefined) {
            $array['parents'] = $this->parents;
        }
        if (!$this->children instanceof \Perfumer\Microservices\Undefined) {
            $array['children'] = $this->children;
        }

        return $array;
    }
}
