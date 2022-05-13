<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Signer;

class UpsertSignerRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $signer_id = null;

    /**
     * @var string
     */
    public $signer_type = null;

    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/signer';
        $this->_request_method = 'put';
        $this->signer_id = new \Perfumer\Microservices\Undefined();
        $this->signer_type = new \Perfumer\Microservices\Undefined();
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->signer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['signer_id'] = $this->signer_id;
        }
        if (!$this->signer_type instanceof \Perfumer\Microservices\Undefined) {
            $array['signer_type'] = $this->signer_type;
        }
        if (!$this->document instanceof \Perfumer\Microservices\Undefined) {
            $array['document'] = $this->document;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
