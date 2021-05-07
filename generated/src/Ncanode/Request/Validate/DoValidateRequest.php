<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Validate;

class DoValidateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $cms = null;

    /**
     * @var string
     */
    public $xml = null;

    /**
     * @var string
     */
    public $iin = null;

    /**
     * @var string
     */
    public $bin = null;

    /**
     * @var string
     */
    public $rule = null;

    /**
     * @var bool
     */
    public $expiration = null;

    /**
     * @var string
     */
    public $criteria = null;

    public function __construct()
    {
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->xml = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->rule = new \Perfumer\Microservices\Undefined();
        $this->expiration = new \Perfumer\Microservices\Undefined();
        $this->criteria = new \Perfumer\Microservices\Undefined();
    }
}
