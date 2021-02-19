<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signature;

class SaveSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
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
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->parent = new \Perfumer\Microservices\Undefined();
        $this->signature = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
    }
}
