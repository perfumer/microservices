<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Page;

class GetPageRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
    }
}