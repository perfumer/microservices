<?php

namespace Generated\Perfumer\Microservices\Box\Request\Collection;

class GetCollectionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $name = null;

    public function __construct()
    {
        $this->_request_url = '/collection';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
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

        return $array;
    }
}
