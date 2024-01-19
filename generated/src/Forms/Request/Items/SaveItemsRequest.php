<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Items;

class SaveItemsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $data = [
    ];

    /**
     * @var string
     */
    public $reference;

    public function __construct()
    {
        $this->_request_url = '/items';
        $this->_request_method = 'post';
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->reference = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->data instanceof \Perfumer\Microservices\Undefined) {
            $array['data'] = $this->data;
        }
        if (!$this->reference instanceof \Perfumer\Microservices\Undefined) {
            $array['reference'] = $this->reference;
        }

        return $array;
    }
}
