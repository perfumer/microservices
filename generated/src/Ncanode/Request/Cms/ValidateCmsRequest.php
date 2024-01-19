<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Cms;

class ValidateCmsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $cms;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $thread;

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
     * @var array
     */
    public $constraints = [
    ];

    /**
     * @var bool
     */
    public $verify_ocsp;

    /**
     * @var bool
     */
    public $verify_crl;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/cms/validate';
        $this->_request_method = 'post';
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->rule = new \Perfumer\Microservices\Undefined();
        $this->constraints = new \Perfumer\Microservices\Undefined();
        $this->verify_ocsp = new \Perfumer\Microservices\Undefined();
        $this->verify_crl = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->cms instanceof \Perfumer\Microservices\Undefined) {
            $array['cms'] = $this->cms;
        }
        if (!$this->data instanceof \Perfumer\Microservices\Undefined) {
            $array['data'] = $this->data;
        }
        if (!$this->document instanceof \Perfumer\Microservices\Undefined) {
            $array['document'] = $this->document;
        }
        if (!$this->thread instanceof \Perfumer\Microservices\Undefined) {
            $array['thread'] = $this->thread;
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
        if (!$this->constraints instanceof \Perfumer\Microservices\Undefined) {
            $array['constraints'] = $this->constraints;
        }
        if (!$this->verify_ocsp instanceof \Perfumer\Microservices\Undefined) {
            $array['verify_ocsp'] = $this->verify_ocsp;
        }
        if (!$this->verify_crl instanceof \Perfumer\Microservices\Undefined) {
            $array['verify_crl'] = $this->verify_crl;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
