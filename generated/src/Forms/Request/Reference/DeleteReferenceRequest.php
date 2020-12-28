<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Reference;

class DeleteReferenceRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->code = new \Perfumer\Microservices\Undefined();
    }
}
