<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Validate;

class DoValidateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $cms;

    /**
     * @var string
     */
    public $xml;

    /**
     * @var string
     */
    public $iin;

    /**
     * @var string
     */
    public $bin;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var bool
     */
    public $expiration;

    /**
     * @var string
     */
    public $criteria;

    public function __construct()
    {
        $this->_request_url = '/validate';
        $this->_request_method = 'post';
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->xml = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->rule = new \Perfumer\Microservices\Undefined();
        $this->expiration = new \Perfumer\Microservices\Undefined();
        $this->criteria = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->cms instanceof \Perfumer\Microservices\Undefined) {
            $array['cms'] = $this->cms;
        }
        if (!$this->xml instanceof \Perfumer\Microservices\Undefined) {
            $array['xml'] = $this->xml;
        }
        if (!$this->iin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin'] = $this->iin;
        }
        if (!$this->bin instanceof \Perfumer\Microservices\Undefined) {
            $array['bin'] = $this->bin;
        }
        if (!$this->rule instanceof \Perfumer\Microservices\Undefined) {
            $array['rule'] = $this->rule;
        }
        if (!$this->expiration instanceof \Perfumer\Microservices\Undefined) {
            $array['expiration'] = $this->expiration;
        }
        if (!$this->criteria instanceof \Perfumer\Microservices\Undefined) {
            $array['criteria'] = $this->criteria;
        }

        return $array;
    }
}
