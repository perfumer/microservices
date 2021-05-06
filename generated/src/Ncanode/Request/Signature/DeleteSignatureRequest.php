<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signature;

class DeleteSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $thread = null;

    public function __construct()
    {
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
    }
}
