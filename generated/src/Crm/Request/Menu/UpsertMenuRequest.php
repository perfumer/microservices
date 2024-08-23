<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Menu;

class UpsertMenuRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $is_protected;

    /**
     * @var array
     */
    public $divisions = [
    ];

    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/menu';
        $this->_request_method = 'put';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->divisions = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->divisions instanceof \Perfumer\Microservices\Undefined) {
            $array['divisions'] = $this->divisions;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
