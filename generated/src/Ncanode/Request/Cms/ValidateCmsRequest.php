<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Cms;

class ValidateCmsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $cms = null;

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

    public function __construct()
    {
        $this->_request_url = '/cms/validate';
        $this->_request_method = 'post';
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->rule = new \Perfumer\Microservices\Undefined();
        $this->expiration = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->cms instanceof \Perfumer\Microservices\Undefined) {
            $array['cms'] = $this->cms;
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

        return $array;
    }
}
