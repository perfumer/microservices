<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signature;

class CreateSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $thread = null;

    /**
     * @var string
     */
    public $cms = null;

    /**
     * @var array
     */
    public $tags = [
    ];

    /**
     * @var int
     */
    public $version = null;

    /**
     * @var string
     */
    public $version_comment = null;

    /**
     * @var string
     */
    public $version_created_by = null;

    public function __construct()
    {
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->version = new \Perfumer\Microservices\Undefined();
        $this->version_comment = new \Perfumer\Microservices\Undefined();
        $this->version_created_by = new \Perfumer\Microservices\Undefined();
    }
}
