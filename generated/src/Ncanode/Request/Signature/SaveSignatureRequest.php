<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signature;

class SaveSignatureRequest extends \Perfumer\Microservices\Request
{
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

    /**
     * @var int
     */
    public $parent = null;

    /**
     * @var string
     */
    public $signature = null;

    /**
     * @var array
     */
    public $tags = [
    ];

    public function __construct()
    {
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->chain = new \Perfumer\Microservices\Undefined();
        $this->stage = new \Perfumer\Microservices\Undefined();
        $this->parent = new \Perfumer\Microservices\Undefined();
        $this->signature = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
    }
}
