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
        $this->_request_url = '/signature';
        $this->_request_method = 'delete';
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        return [
        'document' => $this->document,
        'thread' => $this->thread,
        ];
    }
}
