<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signature;

class GetSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $parent = null;

    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $chain = null;

    /**
     * @var string
     */
    public $stage = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->parent = new \Perfumer\Microservices\Undefined();
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->chain = new \Perfumer\Microservices\Undefined();
        $this->stage = new \Perfumer\Microservices\Undefined();
    }
}
