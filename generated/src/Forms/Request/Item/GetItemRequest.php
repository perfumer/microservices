<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Item;

class GetItemRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }
}
